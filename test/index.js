var app;
var app2;
var app3;
var app4;
var app5;
var app6;
var app7;
var vm;
window.onload = function () {

	var holder = document.getElementById('holder');
	holder.ondra1gover = function () {
		this.className = 'hover';
		return false;
	};
	// holder.ondrop = function (e) {
	// 	this.className = 'hidden';
	// 	e.preventDefault();
	// 	// var file = e.dataTransfer.files[0];
	// 	// var reader = new FileReader();
	// 	// reader.onload = function (event) {
	// 	// 	document.getElementById('image_droped').className = 'visible';
	// 	// 	$('#image_droped').attr('src', event.target.result);
	// 	// };
	// 	// reader.readAsDataURL(file);
	// };

	app = new Vue({
		el: '#app',
		data: {
			message: 'Hello Vue!'
		}
	});
	app2 = new Vue({
		el: '#app-2',
		data: {
			message: 'You loaded this page on ' + new Date()
		}
	});
	app3 = new Vue({
		el: '#app-3',
		data: {
			seen: false
		}
	});
	app4 = new Vue({
		el: '#app-4',
		data: {
			todos: [
				{text: 'Learn JavaScript'},
				{text: 'Learn Vue'},
				{text: 'Build something awesome'}
			]
		}
	});
	app5 = new Vue({
		el: '#app-5',
		data: {
			message: 'Hello Vue.js!'
		},
		methods: {
			reverseMessage: function () {
				this.message = this.message.split('').reverse().join('')
			}
		}
	});
	app6 = new Vue({
		el: '#app-6',
		data: {
			message: 'Hello Vue!'
		}
	});
	Vue.component('todo-item', {
		props: ['todo'],
		template: '<li>{{ todo.text }}</li>'
	});
	app7 = new Vue({
		el: '#app-7',
		data: {
			groceryList: [
				{text: 'Vegetables'},
				{text: 'Cheese'},
				{text: 'Whatever else humans are supposed to eat'}
			]
		}
	});
	vm = new Vue({
		el: '#example',
		data: {
			message: 'Hello'
		},
		computed: {
			// a computed getter
			reversedMessage: function () {
				// `this` points to the vm instance
				// return this.message.split('').reverse().join('');
				return Date.now();
			}
		},
		methods: {
			reverseMessage: function () {
				// `this` points to the vm instance
				// return this.message.split('').reverse().join('');
				return Date.now();
			}
		}
	});
};