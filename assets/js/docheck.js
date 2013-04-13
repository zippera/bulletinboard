// 验证表单数据有效性的函数

// 当函数返回true时，说明验证成功，表单数据正常提交

// 当函数返回false时，说明验证失败，表单数据被终止提交

function doCheck()

{
    var uname   = document.form.username.value;

    var pwd     = document.form.password.value; 

    if (uname == '') {

        alert('请输入用户名!'); return false;

    }

    if (pwd == '') {

        alert('请输入密码!'); return false;
		}
	
return true;
}