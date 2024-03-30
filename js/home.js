const array = ["./includes/image1.jpeg","./includes/image2.jpeg","./includes/image3.jpeg","./includes/image4.jpeg","./includes/image5.jpeg"]
let index=0;
function imageSlide(){
    console.log("IMage")
    if(index==4){
        index=0;

        document.querySelector('.gallery-image').setAttribute('src',array[index]);    
    }else {
        index++;
        document.querySelector('.gallery-image').setAttribute('src',array[index]);    
    }
    setTimeout(imageSlide,4000);
}
imageSlide();