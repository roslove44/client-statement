
let invoices_prerequisites = document.getElementById('invoices_prerequisites');
let invoices_prerequisites_text = document.getElementById('invoices_prerequisites').textContent;
let invoices_form = document.getElementById('add_invoices_form');

console.log(invoices_form, invoices_prerequisites);

if(invoices_prerequisites_text === "Veuillez ajouter vos clients dans la base avant l'enregistrement de Facture.") {
    invoices_form.classList.add("d-none");
    invoices_form.classList.add("h-auto");
}else{
    invoices_prerequisites.classList.add("d-none");
}