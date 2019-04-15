//This jacascript function verifies the code in input field, if code is correct, show the link
/*//////// Citation//////////
  .innerText - https://stackoverflow.com/questions/2310145/javascript-getting-value-of-a-td-with-id-name
  .value - https://stackoverflow.com/questions/2310145/javascript-getting-value-of-a-td-with-id-name
  .style.display - https://www.w3schools.com/howto/howto_js_toggle_hide_show.asp
  */////////
function verify() {
  const $link = document.getElementById('formLink');
  const $code = document.getElementById('code');
  const $inputField = document.getElementById('codeInput');
  const $table = document.getElementById('verifyTable');

  if($code.innerText === $inputField.value) {
    $link.style.display = "block";
    $table.style.display = "none";
    alert('Verified!');
  } else {
    alert('Wrong Verification code!');
  }
}
