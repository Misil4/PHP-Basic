// 15. Dado el siguiente array de objetos
function ariketa15() {
	var elements = [
		{
			code: 'SKI-203',
			name: 'Banana',
			price: 200,
			qty: 31,
			imported: true,
			type: 'Tropical'
		},
		{
			code: 'SFI-233',
			name: 'Pomelo',
			price: 55,
			qty: 325,
			imported: false,
			type: 'Tropical'
		},
		{
			code: 'JKI-453',
			name: 'Piña',
			price: 70,
			qty: 125,
			imported: false,
			type: 'Oceanic'
		},
		{
			code: 'CDC-113',
			name: 'Coco',
			price: 120,
			qty: 25,
			imported: true,
			type: 'Oceanic'
		},
		{
			code: 'SWI-265',
			name: 'Papaya',
			price: 200,
			qty: 725,
			imported: true,
			type: 'Tropical'
		}
	];
	elements.forEach(elements => {
		if (elements.imported != true & elements.qty > 325) {
			console.log(elements);
		}
		else {
			document.write('no hay elementos que mostrar');
		}
	});
}
ariketa15();

// Mostrar por pantalla los elementos no importados cuya cantidad sea mayor de 325 (Declarar una función para ello)