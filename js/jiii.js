$('#myList a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$('#someListItem').tab('show')

// $('#myList a[href="#list-home"]').tab('show') // Select tab by name
// $('#myList a[href="#list-list-profile"]').tab('show')
// $('#myList a[href="#list-messages"]').tab('show') // Select tab by name
// $('#myList a[href="#list-settings"]').tab('show') // Select tab by name
// $('#myList a:first-child').tab('show') // Select first tab
// $('#myList a:last-child').tab('show') // Select last tab
// $('#myList a:nth-child(3)').tab('show') // Select third tab



$('a[data-toggle="list"]').on('shown.bs.tab', function (e) {
  e.target // newly activated tab
  e.relatedTarget // previous active tab
})