<?xml version="1.0"?>
<xsl:stylesheet version="1.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:libml="http://lskgfjv.linuxclass.marist.edu/libml/libml"
  xmlns="http://www.w3.org/1999/xhtml"
  exclude-result-prefixes="libml">
  <xsl:output method="xml" doctype-public="-//W3C//DTD XHTML 1.1//EN" doctype-system="http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd" indent="yes" encoding="UTF-8"/>
	<xsl:template match="libml:book">	
		<html>
			<head>
				<title>LibML XML with XSL</title>
				<link rel="stylesheet" type="text/css" href="style.css" />
			</head>
			<body>
				<div id="content" class="shadow">
					<h1>Nicholas J. La Roux</h1>
					<hr />
					<h2>LibML in Action! - <a href="libml.html">Back</a></h2>
						<div id="book">
			        		<xsl:apply-templates select="libml:detail"/>
			        		<xsl:apply-templates select="libml:writers"/>
							<xsl:apply-templates select="libml:isbn"/>
						</div>
						<!-- still need to for each more books
						<div id="book">
							test
						</div>-->
				</div>
			</body>
		</html>
	</xsl:template>
	
	<xsl:template match="libml:detail">
		<h4>
			<xsl:value-of select="libml:name"/>
	      	<xsl:text> </xsl:text><br />
		</h4>
		<h5>
			<xsl:if test="libml:volume != null">
				<span class="label">Volume: </span>
				<xsl:value-of select="libml:volume"/>
	      		<xsl:text> </xsl:text>
				<br />
			</xsl:if>
			
			<span class="label">Edition: </span>
			<xsl:value-of select="libml:edition"/>
	      	<xsl:text> </xsl:text><br />
			<span class="label">Publish Date: </span>
			<xsl:value-of select="libml:publishDate"/>
	      	<xsl:text> </xsl:text><br />
			<span class="label">Publish House:</span>
			<xsl:value-of select="libml:publishHouse"/>
	      	<xsl:text> </xsl:text>
	    </h5>
	</xsl:template>
	
	<xsl:template match="libml:writers">
		<h5>
			<span class="label">Author: </span>
			<xsl:value-of select="libml:author"/>
	      	<xsl:text> </xsl:text><br />
	
			<xsl:if test="libml:editor != null">
				<span class="label">Editor: </span>
				<xsl:value-of select="libml:editor"/>
	      		<xsl:text> </xsl:text>
			</xsl:if>
	    </h5>
	</xsl:template>
	
	<xsl:template match="libml:isbn">
		<h5>
			<span class="label">ISBN Number: </span>
			<xsl:value-of select="."/>
	      	<xsl:text> </xsl:text>
	    </h5>
	</xsl:template>
	
</xsl:stylesheet>