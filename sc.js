
const form = document.querySelector('.form-add');
form.addEventListener('submit', (e) => {
  e.preventDefault();
  const formData = new FormData(e.target);

  let link1 = formData.get('lnk'); 
	const linkField = document.querySelector('.short-link');
	  $.ajax ({
		type: 'POST',
		url: '/resp.php',
		data: { "corazon": link1},
		success: function (response, request) {
			linkField.value = response;
		},
	  });
});