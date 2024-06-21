
function TableToPdf(parTableID, parFilename = null,
                    parOrientation = null, parPaperSize = null,
                    parColOptions = null
                    ) {

    var tableID = parTableID;                        
    var filename = 'pdf_data.pdf';
    var orientation = 'p';
    var paperSize = 'letter';

    if (parFilename) {
        filename = parFilename;
    }

    if (parOrientation) {
        orientation = parOrientation;
    }

    if (parPaperSize) {
        paperSize = parPaperSize;
    }

    var doc = new jsPDF({orientation: orientation, format: paperSize});
    var options = {
        html: '#'+tableID,
        styles: { lineColor: 200, lineWidth: 0.1, },
        headStyles: { fillColor: false, textColor: 20, halign: 'center', valign: 'middle' },
        bodyStyles: { fillColor: false, textColor: 20 },
        alternateRowStyles: { fillColor: false },
    };

    if (parColOptions) {
        options.columnStyles = parColOptions.columnStyles;
    }

    doc.autoTable(options);
    
    //doc.output('dataurlnewwindow');
    doc.save(filename);

} //end method

