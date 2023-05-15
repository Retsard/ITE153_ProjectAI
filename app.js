const cameraBtn = document.getElementById("cameraBtn");
const captureBtn = document.getElementById("captureBtn");
const canvas = document.getElementById("canvas");
const context = canvas.getContext("2d");
const capturedImg = document.getElementById("capturedImg");

cameraBtn.addEventListener("click", () => {
    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices.getUserMedia({ video: true})
        .then(function(stream) {
            video.srcObject = stream;
            video.play();
            captureBtn.style.display = "block";
        })
        .catch(function(error) {
            console.error("Unable to access the camera", error);
        })
    }
});

captureBtn.addEventListener("touchstart", () => {
    context.drawImage(video, 0, 0, canvas.clientWidth, canvas.height);
    capturedImg.src = canvas.toDataURL();
    capturedImg.style.display = "block";
    video.style.display = 'none';
    captureBtn.style.display = 'none';
});

window.addEventListener('resize', () => {
    canvas.width = canvas.clientWidth;
    canvas.height = canvas.clientHeight;
});