FILENAME=index.xml

all: html pdf

html:
	xsltproc --stringparam chunk.section.depth 0 \
	--stringparam suppress.navigation 1 \
	--stringparam  chapter.autolabel 0 \
	--stringparam  section.autolabel 1 \
	--stringparam toc.section.depth 0 \
	../admin/docbook/chunk.xsl  \
           ${FILENAME}

pdf:
	docbook2pdf \
           -l /usr/share/sgml/docbook/dsssl-stylesheets/dtds/decls/xml.dcl \
           ${FILENAME}

debian-sarge:
	xsltproc --stringparam chunk.section.depth 0 \
	--stringparam suppress.navigation 1 \
	--stringparam  chapter.autolabel 0 \
	--stringparam  section.autolabel 1 \
	--stringparam toc.section.depth 0\
           /usr/share/xml/docbook/stylesheet/nwalsh/html/chunk.xsl \
           $(FILENAME)

mac:
	xsltproc --stringparam chunk.section.depth 0 \
	--stringparam chapter.autolabel 0 \
	/usr/share/xml/xsl/docbook-xsl/html/chunk.xsl \
	$(FILENAME)

xep:
	/homes/yusra/XEP/xep \
	-xml $(FILENAME) \
	-xsl ~/XEP/nwalsh/fo/docbook.xsl \
	-out index.pdf