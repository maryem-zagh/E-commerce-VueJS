import AppForm from '../app-components/Form/AppForm';

Vue.component('order-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                phone:  '' ,
                email:  '' ,
                adress:  '' ,
                city:  '' ,
                country:  '' ,
                is_gift:  false ,
                message:  '' ,
                total:  '' ,
                
            }
        }
    }

});