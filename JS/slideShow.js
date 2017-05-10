
            
            var curIndex = 0,
    imgDuration = 6000,
    slider = document.getElementById("slider"),
    slides = slider.childNodes; //get a hook on all child elements, this is live so anything we add will get listed
    imgArray = [
        '/Bilder/vulkan3.jpg',
        '/Bilder/vulkan1.jpg',
        '/Bilder/vulkan2.jpg'];


//
// Dynamically add each image frame into the dom;
//
function buildSlideShow(arr) {
    for (i = 0; i < arr.length; i++) {
        var img = document.createElement('img');
        img.src = arr[i];
        slider.appendChild(img);
    }
    // note the slides reference will now contain the images so we can access them
}

//
// Our slideshow function, we can call this and it flips the image instantly, once it is called it will roll
// our images at given interval [imgDuration];
//
function slideShow() {
    
    function fadeIn(e) {
        e.className = "fadeIn";
    };

    function fadeOut(e) {
        e.className = "";
    };

        debugger;

        fadeOut(slides[curIndex]);
        curIndex++;
        if (curIndex === slides.length) {
            curIndex = 0;
        }
        
        fadeIn(slides[curIndex]);

        setTimeout(function () {
            slideShow();
        }, imgDuration);
    };
    buildSlideShow(imgArray);
    slideShow();
            
            
      
        