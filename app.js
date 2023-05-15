const cameraBtn = document.getElementById("cameraBtn");
const canvas = document.getElementById("canvas");
const context = canvas.getContext("2d");

cameraBtn.addEventListener("click", () => {
    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices.getUserMedia({ video: true})
        .then(function(stream) {
            video.srcObject = stream;
            video.play();
        })
        .catch(function(error) {
            console.error("Unable to access the camera", error);
        })
    }
});