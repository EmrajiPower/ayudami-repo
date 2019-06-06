const entidad = document.getElementById('select-entidad')
console.log('Casi entra');
entidad.addEventListener('change', function seleccionar_entidad() {

  console.log('Entró');

  const indice = entidad.selectedIndex



  const fiscalia = document.getElementById('fiscalia')
  const policia = document.getElementById('policia')
  const fundacion = document.getElementById('fundacion')
  const universidad1 = document.getElementById('universidad1')
  const universidad2 = document.getElementById('universidad2')
  const aseguradora1 = document.getElementById('aseguradora1')

  if (indice == 'Documento Especial'){
    fiscalia.style.display = 'block'
    policia.style.display = 'none'
    fundacion.style.display = 'none'
    universidad1.style.display = 'none'
    universidad2.style.display = 'none'
    aseguradora1.style.display = 'none'
  }

  if (indice == 'Policia Nacional'){

  }

  if (indice == 'Fundacion Amigable'){

  }

  if (indice == 'No se'){

  }
});
