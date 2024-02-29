const btn = document.querySelector('#upload_btn');

// console.log(btn);

btn.addEventListener('click', (e) => {
  e.preventDefault();
  const f = document.upload_form;
  if (f.photo.value == '') {
    alert('파일을 첨부해주세요.');
    return false;
  }
  f.submit();
});
