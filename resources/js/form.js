const forms = document.querySelectorAll('.web-form');
const ERROR_CLASS = 'error';
const SUCCESS_CLASS = 'success';

var toastElSuccess = document.querySelector('.toast_error');
var toastElError = document.querySelector('.toast_success');

const toast = {
    success: null,
    error: null
}
const successToast = new bootstrap.Toast(toastElSuccess);
toast.success = {
    ...successToast,
    show: text => {
        toastElSuccess.querySelector('.toast-body').textContent = text;
        successToast.show();
    }
}
const errorToast = new bootstrap.Toast(toastElError);
toast.error = {
    ...errorToast,
    show: text => {
        toastElError.querySelector('.toast-body').textContent = text;
        errorToast.show();
    }
};

forms.forEach(addForm);


var serializeForm = function (form) {
	var obj = {};
	var formData = new FormData(form);
	for (var key of formData.keys()) {
		obj[key] = formData.get(key);
	}
	return obj;
};

function addForm(form) {
    form.addEventListener('submit', handleFormSubmit)
    
}

function handleFormSubmit(event) {
    event.preventDefault();
    event.stopPropagation();
    const data = serializeForm(event.target);
    const {action, method} = event.target;
    if (!data.name) {
        data.name = 'No name';
    }
    fetch(action, {
        method,
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': data._token
        },
        body: JSON.stringify({ ...data, subject: event.target.dataset.subject })
    })
    .then((response) => new Promise((resolve, reject) => response.json().then(respJson => {
        if (response.status === 400) {
            return reject(respJson)
        }
        return resolve({
            status: response.status,
            data: respJson
        })
    })))
    .then(data => onFormSuccess(data, event.target))
    .catch(data => onFormError(data, event.target))
}

function onFormSuccess(data, form) {
    form.reset();
    toast.success.show('Данные успешно отправлены');
}
function onFormError(errors) {
    Object.keys(errors).map(key => {
        toast.error.show(errors[key]);
    })
}

export default addForm;