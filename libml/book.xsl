<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.lskgfjv.linuxclass.marist.edu/libml/book.xsl">
	
<xsl:template match="/book">
<html>
	<body>
		<table border="1">
			<tr>
				<th>Details</th>
			</tr>
			<xsl:for-each select="detail">
			<tr>
				<td><xsl:value-of select="title"/></td>
				<td><xsl:value-of select="volume"/></td>
				<td><xsl:value-of select="edition"/></td>
				<td><xsl:value-of select="publishDate"/></td>
				<td><xsl:value-of select="publishHouse"/></td>
			</tr>
			</xsl:for-each>
		</table>
	</body>
</html>
</xsl:template>
</xsl:stylesheet>