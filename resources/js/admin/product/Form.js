import AppForm from '../app-components/Form/AppForm';

Vue.component('product-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  '' ,
                description:  '' ,
                price:  '' ,
                slug:  '' ,
                perex:  '' ,
                published_at:  '' ,
                enabled:  false ,
                imageSrc:  '' ,
                imageAlt:  '' ,
                
            }
        }
    }

});