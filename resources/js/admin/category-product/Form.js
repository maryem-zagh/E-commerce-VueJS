import AppForm from '../app-components/Form/AppForm';

Vue.component('category-product-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                category_id:  '' ,
                product_id:  '' ,
                
            }
        }
    }

});