<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="books">
		<!-- Write the styling like in HTML -->
		<html>
			<body>
				<table>
					<tr>
						<th>Name</th>
						<th>Price</th>
						<th>Auther</th>
					</tr>
					<!-- Run a for loop for all employees -->
					<xsl:for-each select="books/book">
					  <!-- Apply 'if' condition. Here, &gt means 'greater than' -->
						<xsl:if test="price&gt;3000">
							<tr>
								<!-- '@' denotes attribute -->
								<td><xsl:value-of select="@id"/></td>
								<td><xsl:value-of select="name"/></td>
								<td><xsl:value-of select="price"/></td>
								<td><xsl:value-of select="author"/></td>
							</tr>
						</xsl:if>
					</xsl:for-each>
				</table>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>