document.addEventListener('DOMContentLoaded', function () {
  // -- start

  const submitBtn = document.querySelector('#btn');
  const subjectInput = document.querySelector('input[name="subject"]');
  const contentInput = document.querySelector('textarea[name="content"]');

  // console.log(submitBtn);
  // console.log(contentInput);

  submitBtn.addEventListener('click', function (e) {
    e.preventDefault();
    if (subjectInput.value == '') {
      alert('제목을 입력해주세요.');
      subjectInput.focus();
      return false;
    } else if (contentInput.value == '') {
      alert('내용을 입력해주세요');
      contentInput.focus();
      return false;
    }
    document.boardform.submit();
  });
});
