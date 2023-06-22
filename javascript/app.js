window.addEventListener('scroll', function(){
  const header = this.document.querySelector('header')
  header.classList.toggle("sticky", window.scrollY > 0)
})

function toggleMenu(){
  const menuToggle = document.querySelector('.menuToggle');
  const navigation = document.querySelector('.navigation');
  menuToggle.classList.toggle('active')
  navigation.classList.toggle('active')
}

// More API functions here:
// https://github.com/googlecreativelab/teachablemachine-community/tree/master/libraries/image

// the link to your model provided by Teachable Machine export panel
const URL = "https://teachablemachine.withgoogle.com/models/vZNeljqAU/";

let model, webcam, maxPredictions, messageContainer;
let currentCamera = "front"; 
let isCameraRunning = false;
// Load the image model and setup the webcam
async function init() {
    if (webcam && webcam.playing) {
        webcam.stop(); // Stop the previous camera instance if it exists and is playing
    }
    
    const modelURL = URL + "model.json";
    const metadataURL = URL + "metadata.json";

    // load the model and metadata
    // Refer to tmImage.loadFromFiles() in the API to support files from a file picker
    // or files from your local hard drive
    // Note: the pose library adds "tmImage" object to your window (window.tmImage)
    model = await tmImage.load(modelURL, metadataURL);
    maxPredictions = model.getTotalClasses();

    // Convenience function to setup a webcam
    const flip = currentCamera === false; // whether to flip the webcam
    webcam = new tmImage.Webcam(250, 250, flip); // width, height, flip
    await webcam.setup({ facingMode: "environment" }); // request access to the webcam
    await webcam.play();
    window.requestAnimationFrame(loop);

    document.getElementById('webcam-container').style.display = 'block';
    document.getElementById('message-container').style.display = 'block';
    // append elements to the DOM
    const webcamContainer = document.getElementById("webcam-container");
    webcamContainer.innerHTML = "";
    webcamContainer.appendChild(webcam.canvas);
    messageContainer = document.getElementById("message-container");

}

// Function to switch between the front and back cameras
// function switchCamera() {
//   if (currentCamera === "front") {
//       currentCamera = "back";
//   } else {
//       currentCamera = "front";
//   }
//   init(); // Reinitialize the webcam with the new camera
// }

function startCamera() {
    if (!isCameraRunning) {
        isCameraRunning = true;
        init();
    }
}

function stopCamera() {
    if (isCameraRunning) {
        webcam.stop();
        isCameraRunning = false;
        document.getElementById('webcam-container').style.display = 'none';
        document.getElementById('message-container').style.display = 'none';
        // document.getElementById('stopCamera').style.display = 'none';
        document.getElementById('startCamera').style.display = 'block';
    }
}

async function loop() {
    webcam.update(); // update the webcam frame
    await predict();
    window.requestAnimationFrame(loop);
}

// run the webcam image through the image model
async function predict() {
    // predict can take in an image, video or canvas html element
    const prediction = await model.predict(webcam.canvas);

    let highestPrediction = null;

    for (let i = 0; i < maxPredictions; i++) {
        if (!highestPrediction || prediction[i].probability > highestPrediction.probability) {
            highestPrediction = prediction[i];
        }
    }

    if (highestPrediction && highestPrediction.probability > 0.90) {
        const foodName = highestPrediction.className;
        sendFoodName(foodName);
    } else {
        messageContainer.textContent = "Please scan a fruit";
    }
}

    // Send an HTTP request with the driver's number to the PHP script
function sendFoodName(foodName) {
    window.location.href = 'camera-fruit.php?foodName=' + foodName;
}