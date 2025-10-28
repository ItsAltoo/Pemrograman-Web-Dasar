const nameUser = document.getElementById("name");
const nim = document.getElementById("nim");
const semester = document.getElementById("semester");
const programStudi = document.getElementById("program-studi");
const email = document.getElementById("email");

function onClick() {
  const datas = {
    name: nameUser.value,
    nim: nim.value,
    semester: semester.value,
    programStudi: programStudi.value,
    email: email.value,
  };

  console.log(datas);
  alert("Data telah dikirim!");
}
