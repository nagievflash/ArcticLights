document.addEventListener('DOMContentLoaded', () => {
    const forms = document.querySelectorAll('.js-ajax-form')
    const ajaxSend = async (requestMethod, requestUrl, formData) => {
        const fetchResponse = await fetch(requestUrl, {
            method: requestMethod,
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': getCSRFToken()
            },
            body: formData
        })
        return await fetchResponse.json()
    }
    forms.forEach((form) => {
        form.addEventListener('submit', function (e) {
            e.preventDefault()
            const _this = this
            const preloader = new Preloader(this)
            const formData = new FormData(this)
            const requestUrl = this.getAttribute('action')
            const requestMethod = this.getAttribute('method')
            _this.querySelectorAll('.form__error-message').forEach((error) => {
                error.parentNode.removeChild(error);
            })
            preloader.show()
            ajaxSend(requestMethod, requestUrl, formData)
                .then((response) => {
                    if (response.success) {
                        const success = document.createElement('div')
                        success.classList.add('form__success')
                        const successIcon = document.createElement('div')
                        successIcon.classList.add('form__success-icon')
                        success.appendChild(successIcon)
                        _this.prepend(success)
                        setTimeout((success) => {
                            success.remove();
                        }, 2000, success)
                    } else {
                        const errors = response.errors
                        for (let error in errors) {
                            const formError = document.createElement('span')
                            formError.classList.add('form__error-message')
                            formError.textContent = response.message
                            _this.querySelector(`[name="${error}"]`).after(formError)
                        }
                    }
                })
                .finally(() => {
                    preloader.remove()
                })
        })
    })
})


/**
 * Прелоадер
 * @param selector
 * @constructor
 */
function Preloader(selector) {
    let _this = this

    this.getPreloader = function () {
        const preloader = document.createElement('div')
        preloader.classList.add('app-preloader')
        for (let i = 0; i < 5; i++) {
            preloader.append(document.createElement('span'))
        }
        return preloader
    }

    this.show = function () {
        selector.style.position = 'relative';
        selector.prepend(_this.getPreloader())
    }

    this.remove = function () {
        selector.querySelector('.app-preloader').remove()
    }

}

function getCSRFToken() {
    return document.querySelector('meta[name="csrf-token"]').getAttribute('content')
}
