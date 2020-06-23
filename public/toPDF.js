gsom.onclick = ()=>{
    var doc = new jsPDF();
    doc.fromHTML(content, 15, 15, {
        'width': 170,
        'elementHandlers': {'#editor': ()=>true}
    });
    doc.save('sample-file.pdf');
}