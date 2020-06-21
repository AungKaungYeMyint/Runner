function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#product_image').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$("#product_img").change(function(){
    readURL(this);
});