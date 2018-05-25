<?php

	include 'menu.inc';

	echo "<h1>Task 8a</h1>";
	echo "<p>The entities include the following:</p>";
	echo 	"<ul>
				<li>tblActors</li>
				<li>tblRollTypes</li>
				<li>tblFilmActorRoles</li>
				<li>tblFilmGenres</li>
				<li>tblProducers</li>
				<li>tblFilmTitles</li>
				<li>tblFilmTitlesProducers</li>
				<li>tblFilmCertificates</li>
			</ul>";



	echo "<h1>Task 8b</h1>";
	echo "<p>Relationships between entities:</p>";
	echo 	"<ul>
				<li><b><i>tblActors</i></b> and <i><b>tblFilmTitles</i></b> - Represents a many-to-many relationship. Attributes lngActorID and lngFilmTitleID represents the primary key.</li>
				<li><b><i>tblRoleTypes</i></b> and <i><b>tblFilmTitles</i></b> - Represents a many-to-many relationship. Attributes lngRoleTypeID and lngFilmTitleID represents the primary key.</li>
				<li><b><i>tblActors</i></b> and <i><b>tblFilmsActorRoles</i></b> - Represents a one-to-many relationship. Attribute lngActorID represents the primary key in the tblActors entity and the foreign key in the tblFilmActorRoles entity.</li>
				<li><b><i>tblRoleTypes</i></b> and <i><b>tblFilmsActorRoles</i></b> - Represents a one-to-many relationship. Attribute lngRoleTypeID represents the primary key in the tblRoleTypes entity and the foreign key in the tblFilmsActorRoles.</li>
				<li><b><i>tblFilmTitles</i></b> and <i><b>tblFilmsActorRoles</i></b> - Represents a one-to-many relationship. Attribute lngFilmTitleID represents the primary key in the tblFilmTitles entity and the foreign key in the tblFilmActorRoles.</li>
				<li><b><i>tblFilmGenres</i></b> and <i><b>tblFilmTitles</i></b> - Represents a one-to-many relationship. Attribute lngGenreID represents the primary key in the tblFilmGenres.</li>
				<li><b><i>tblFilmCertificates</i></b> and <i><b>tblFilmTitles</i></b> - Represents a one-to-many relationship. Attribute lngCertificateID represents the primary key in the tblFilmCertificates and foreign key in the tblFilmTitles entity.</li>
				<li><b><i>tblFilmCertificates</i></b> and <i><b>tblFilmGenres</i></b> - Represents a many-to-many relationship.</li>
				<li><b><i>tblProducers</i></b> and <i><b>tblFilmTitlesProducers</i></b> - Represents a one-to-many relationship. Attribute lngProducerID represents a primary key in the tblProducers entity and foreign key in the tblFilmTitlesProducers.</li>
				<li><b><i>tblFilmTitles</i></b> and <i><b>tblFilmTitlesProducers</i></b> - Represents a one-to-many relationship. Attribute lngFilmTitleID represents a primary key in the tblFilmTitles entity and foreign key in the tblFilmTitlesProducers.</li>
				<li><b><i>tblProducers</i></b> and <i><b>tblFilmTitles</i></b> - Represents a many-to-many relationship.</li>
			</ul>";

?>