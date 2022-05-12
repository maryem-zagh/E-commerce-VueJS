import AppForm from '../app-components/Form/AppForm';

Vue.component('product-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  '' ,
                description:  '' ,
                prix:  '' ,
                slug:  '' ,
                perex:  '' ,
                category_id:  '' ,
                published_at:  '' ,
                enabled:  false ,
                
            }
        }
    }

});