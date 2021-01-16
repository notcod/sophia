if (getCookie("welcome") == "") {
    Swal.fire('Oops...', 'You found the best framework ever!', 'success');
    setCookie("welcome", true, 300);
}