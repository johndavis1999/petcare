function success_noti(message) {
	Lobibox.notify('success', {
		pauseDelayOnHover: true,
		continueDelayOnInactiveTab: false,
		position: 'top right',
		icon: 'bi bi-check2-circle',
        title: '¡Éxito!',
        msg: message,
	});
}

function error_noti(message) {
	Lobibox.notify('error', {
		pauseDelayOnHover: true,
		continueDelayOnInactiveTab: false,
		position: 'top right',
		icon: 'bi bi-x-circle',
        title: 'Error!',
        msg: message,
	});
}