/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
        nom: '',
        email: '',
        numero: '',
        pays: '',
        ville: '',
        marque: '',
        modele: '',
        year: '',
        vif: '',
        message: '',
    },
    methods: {
        send() {
            
            var __current = this;
            axios.post('/commander', {
                nom: this.nom,
                email: this.email,
                numero: this.numero,
                pays: this.pays,
                ville: this.ville,
                marque: this.marque,
                modele: this.modele,
                year: this.year,
                vif: this.vif,
                message: this.message,
            })
                .then(function (response) {
                    console.log(response);
                    __current.nom = ''
                    __current.email = ''
                    __current.numero = ''
                    __current.pays = ''
                    __current.ville = ''
                    __current.marque = ''
                    __current.modele = ''
                    __current.year = ''
                    __current.vif = ''
                    __current.message = ''
                    $.dialog({
                        type: 'green',
                        closeIcon: true,
                        typeAnimated: true,
                        title: '<div style="color:black">Commande effectuée avec success<div>',
                        content: 'On vous contacterons le plus vite possible !',
                    });

                })
                .catch(function (error) {
                    console.log(error);
                });

        },
        infome(command) {
            $.alert({
                title: `${command.marque} ${command.modele}`,
                theme: 'supervan',
                typeAnimated: true,
                content: `
                <div style="text-align:left">
                Nom: ${command.nom} <br> 
                Email : ${command.email} <br> 
                Phone : ${command.numero} <br> 
                Pays: ${command.pays} | Ville: ${command.ville} <br>
                Marque: ${command.marque} <br>
                Modele: ${command.modele} <br>
                Anneé: ${command.year} <br> 
                VIF: ${command.vif} <br>
                Information: ${command.message}
                <div>`,
                closeIcon:true,
                buttons: {
                   
                    cancel: {
                        text: 'Supprimer',
                        action: function () {
                            axios.delete('/commander/' + command.id)
                                .then(function (response) {
                                    $.dialog({
                                        type: 'green',
                                        closeIcon: true,
                                        typeAnimated: true,
                                        title: '<div style="color:black">Suppression effectué<div>',
                                        content: 'La command a été effacé!',
                                    });
                                })
                                .catch(function (error) {
                                    console.log(error);
                                });
                        }
                    }
                }
            });
        }
    }
});
