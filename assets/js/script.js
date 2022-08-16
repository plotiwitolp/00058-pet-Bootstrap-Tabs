$('document').ready(() => {
  $('a[data-bs-toggle="tab"]').on('shown.bs.tab', (e) => {
    console.log(e.target); // active tab
    console.log(e.relatedTarget); // previous tab
  });
});
