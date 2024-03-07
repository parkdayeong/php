document.addEventListener('DOMContentLoaded', function () {
  // -- start

  // 변수세팅
  const id = document.querySelector('#id'),
    pw = document.querySelector('#pw'),
    btn = document.querySelector('#login_btn');

  btn.addEventListener('click', function (e) {
    e.preventDefault();

    if (id.value == '') {
      alert('아이디를 입력해주세요');
      id.focus();
      return false;
    } else if (pw.value == '') {
      alert('비밀번호를 입력해주세요');
      pw.focus();
      return false;
    }
    document.login_form.submit();
  });

  // -- end
});
