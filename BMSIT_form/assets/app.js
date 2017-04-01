var wrapper = document.getElementById("signature-pad"),
    clearButton = wrapper.querySelector("[data-action=clear]"),
    savePNGButton = wrapper.querySelector("[data-action=save-png]"),
   canvas = wrapper.querySelector("canvas"),
    signaturePad;
signaturePad = new SignaturePad(canvas);

clearButton.addEventListener("click", function (event) {
    signaturePad.clear();
});

savePNGButton.addEventListener("click", function (event) {
    if (signaturePad.isEmpty()) {
        alert("Please provide signature first.");
    } else {
     alert("Signature has been saved");
  var canvas  = document.getElementById("abhiyan");
    var dataUrl = canvas.toDataURL();
   document.getElementById("kunal").value = dataUrl;
 
 }
 });


