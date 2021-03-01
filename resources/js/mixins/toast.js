export default {
    methods: {
        globalToastError(errors) {
            let fields = Object.keys(errors.errors)
            fields.forEach(field => {
                errors.errors[field].forEach(error => {
                    this.$notify.error({
                        title: 'Ошибка',
                        message: error
                    });
                })
            })


        }
    }
}
