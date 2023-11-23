<!-- Use XSL standards from w3.org  -->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<!-- Match the root element of the XML -->
	<xsl:template match="employee_list">
		<!-- Write the styling like in HTML -->
		<html>
			<body>
				<table>
					<tr>
						<th>Name</th>
						<th>Salary</th>
						<th>Email</th>
						<th>Contact</th>
					</tr>
					<!-- Run a for loop for all employees -->
					<xsl:for-each select="employee_list/employee">
					  <!-- Apply 'if' condition. Here, &gt means 'greater than' -->
						<xsl:if test="salary&gt;30000">
							<tr>
								<!-- '@' denotes attribute -->
								<td><xsl:value-of select="@id"/></td>
								<td><xsl:value-of select="name"/></td>
								<td><xsl:value-of select="salary"/></td>
								<td><xsl:value-of select="email"/></td>
								<td><xsl:value-of select="contact"/></td>
							</tr>
						</xsl:if>
					</xsl:for-each>
				</table>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>