import PyPDF2
exp1 = open('EXP1.pdf','rb')
exp2 = open('EXP2.pdf','rb')
exp3 = open('EXP3.pdf','rb')
exp4 = open('EXP4.pdf','rb')
exp5 = open('EXP5.pdf','rb')
exp6 = open('EXP6.pdf','rb')
exp7 = open('EXP7.pdf','rb')
assignment1 = open('ASSIGNMENT1.pdf','rb')
assignment2 = open('ASSIGNMENT2.pdf','rb')

p1r = PyPDF2.PdfFileReader(exp1)
p2r = PyPDF2.PdfFileReader(exp2)
p3r = PyPDF2.PdfFileReader(exp3)
p4r = PyPDF2.PdfFileReader(exp4)
p5r = PyPDF2.PdfFileReader(exp5)
p6r = PyPDF2.PdfFileReader(exp6)
p7r = PyPDF2.PdfFileReader(exp7)
p8r = PyPDF2.PdfFileReader(assignment1)
p9r = PyPDF2.PdfFileReader(assignment2)

pdfWriter = PyPDF2.PdfFileWriter()

for pageNum in range(p1r.numPages):
    pageObj = p1r.getPage(pageNum)
    pdfWriter.addPage(pageObj)

for pageNum in range(p2r.numPages):
    pageObj = p2r.getPage(pageNum)
    pdfWriter.addPage(pageObj)

for pageNum in range(p3r.numPages):
    pageObj = p3r.getPage(pageNum)
    pdfWriter.addPage(pageObj)

for pageNum in range(p4r.numPages):
    pageObj = p4r.getPage(pageNum)
    pdfWriter.addPage(pageObj)

for pageNum in range(p5r.numPages):
    pageObj = p5r.getPage(pageNum)
    pdfWriter.addPage(pageObj)

for pageNum in range(p6r.numPages):
    pageObj = p6r.getPage(pageNum)
    pdfWriter.addPage(pageObj)

for pageNum in range(p7r.numPages):
    pageObj = p7r.getPage(pageNum)
    pdfWriter.addPage(pageObj)

for pageNum in range(p8r.numPages):
    pageObj = p8r.getPage(pageNum)
    pdfWriter.addPage(pageObj)

for pageNum in range(p9r.numPages):
    pageObj = p9r.getPage(pageNum)
    pdfWriter.addPage(pageObj)

pdfOutputFile = open('RPL-28-Kazi_Jawwad_A_Rahim.pdf','wb')
pdfWriter.write(pdfOutputFile)

pdfOutputFile.close()
exp1.close()
exp2.close()
exp3.close()
exp4.close()
exp5.close()
exp6.close()
exp7.close()
assignment1.close()
assignment2.close()
