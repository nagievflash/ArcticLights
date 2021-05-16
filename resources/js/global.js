document.addEventListener('DOMContentLoaded', () => {
    const forms = document.querySelectorAll('.js-ajax-form')
    const ajaxSend = async (requestMethod, requestUrl, formData) => {
        const fetchResponse = await fetch(requestUrl, {
            method: requestMethod,
            headers: {
                'Content-Type': 'application/json;charset=utf-8',
                'X-CSRF-TOKEN': getCSRFToken()
            },
            body: formData
        })
        if (!fetchResponse.ok) {
            throw new Error(`Ошибка по адресу ${url}, статус ошибки ${fetchResponse.status}`)
        }
        return await fetchResponse.json()
    }
    forms.forEach((form) => {
        form.addEventListener('submit', function (e) {
            e.preventDefault()
            let preloader = new Preloader(this)
            const formData = new FormData(this)
            const requestUrl = this.getAttribute('action')
            const requestMethod = this.getAttribute('method')
            preloader.show()
            ajaxSend(requestMethod, requestUrl, formData)
                .then((response) => {
                    preloader.remove()
                    console.log(response)
                    console.log(response.message)
                })
                .catch((error) => console.error(error))
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
        let preloader = document.createElement('div')
        let preloaderInner = document.createElement('div')
        preloader.classList.add('app-preloader')
        preloaderInner.classList.add('app-preloader--inner')
        for (let i = 0; i < 5; i++) {
            preloaderInner.append(document.createElement('span'))
        }
        preloader.append(preloaderInner)
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
