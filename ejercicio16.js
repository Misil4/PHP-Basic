// 16. Dado el siguiente array de objetos
function ariketa16() {
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
	if (elements.imported!=false) {
		document.write('kodea'+'\n'+elements.code+'\n'+'prezioa'+'\n'+elements.price)
	}
});
}
ariketa16();
// Si el elemento es importado mostrar por consola el código y el precio (Declarar una función para ello)
