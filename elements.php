<?php
    $elementSetMetadata = array(
        'name'        => 'Descriptive Metadata',
        'description' => "CAVPP custom descriptive metadata element set, based on PBCore (a metadata standard for audiovisual media developed by the public broadcasting community. See http://www.pbcore.org/documentation/)",
        'record_type' => 'Item',
    );

    $elements = array(

		// Institution. Maps to <pbcoreCollection collectionSource>
		array(
            'label' => 'Institution',
            'name'  => 'Institution',
            /* 'description' => 'Name of Institution.', */
			'data_type' => 'Tiny Text',
        ),
		
        // Item title. Maps to <pbcoreTitle titleType="Main">
        array(
            'label' => 'Title',
            'name'  => 'Title',
            /* 'description' => 'Main Title. Use brackets for supplied titles.', */
            'data_type' => 'Tiny Text',
        ),
		
		// Important to CA history. Maps to <pbcoreExtension> -- need detailed mapping
		array(
            'label' => 'Why is this important to California history?',
            'name'  => 'Why is this important to California history?',
            /* 'description' => 'CAVPP: Please provide a cataloging note here.', */
        ),
		
		// Date Created. Maps to <pbcoreAssetDate dateType="created">.
        array(
            'label' => 'Date Created',
            'name'  => 'Date Created',
            /* 'description' => 'The original date that the media item was created. In the case of raw interviews, the date on which the interview was conducted. Format: YYYY-MM-DD', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Extension: Country of Creation. Maps to extension --> 
        array(
            'label' => 'Country of Creation',
            'name'  => 'Country of Creation',
            /* 'description' => 'CAVPP: Please provide cataloging note here.', */
			'data_type' => 'Tiny Text',
        ),
				
		// Creators (dropdown list?)
		// // Director
        array(
            'label' => 'Creator - Director',
            'name'  => 'Creator - Director',
            /* 'description' => 'Director. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Interviewer
        array(
            'label' => 'Creator - Interviewer',
            'name'  => 'Creator - Interviewer',
            /* 'description' => 'Interviewer. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Performer
        array(
            'label' => 'Creator - Performer',
            'name'  => 'Creator - Performer',
            /* 'description' => 'Performer. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Producer
		        array(
            'label' => 'Creator - Producer',
            'name'  => 'Creator - Producer',
            /* 'description' => 'Producer. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Writer
        array(
            'label' => 'Creator - Writer',
            'name'  => 'Creator - Writer',
            /* 'description' => 'Writer. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),		

		// Copyright Statement. Maps to <pbcoreRightsSummary><rightsSummary>.		
        array(
            'label' => 'Copyright Statement',
            'name'  => 'Copyright Statement',
            /* 'description' => 'Information about rights to the media item. Typically, rights information includes a statement about various property rights associated with the resource, including intellectual property rights.', */
        ),
		
		// Generation
		array(
            'label' => 'Generation (physical asset)',
            'name'  => 'Generation (physical asset)',
            /* 'description' => 'Generation.', */
            'data_type'   => 'Tiny Text',
        ),

		// Format
		array(
            'label' => 'Format (physical asset)',
            'name'  => 'Format (physical asset)',
            /* 'description' => 'Format.', */
            'data_type'   => 'Tiny Text',
        ),

		// Extent
		array(
            'label' => 'Extent (physical asset)',
            'name'  => 'Extent (physical asset)',
            /* 'description' => 'Extent.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Institution URL. Maps to <pbcoreCollection collectionRef>
		array(
            'label' => 'Institution URL',
            'name'  => 'Institution URL',
            /* 'description' => 'Institution\'s website.', */
			'data_type' => 'Tiny Text',
        ),
		
		// Institution Call # (identifier type). Maps to <pbcoreIdentifier identifierType="Call Number">
		array(
            'label' => 'Institution Call Number',
            'name'  => 'Institution Call Number',
            /* 'description' => 'Institution\'s unique identifier (call number, acquisition number, shelf code).', */
			'data_type' => 'Tiny Text',
        ),
		
		// Additional Title. Maps to <pbcoreTitle titleType="Summary">
        array(
            'label' => 'Additional Title',
            'name'  => 'Additional Title',
            /* 'description' =>'Additional Title.', */
            'data_type'   => 'Tiny Text',
            '_refines'    => 'Title',
        ),
		
		// Series Title. Maps to <pbcoreTitle titleType="Series">
		array(
            'label' => 'Series Title',
            'name'  => 'Series Title',
            /* 'description' =>'If applicable, the larger series to which the episode or piece contributed.', */
            'data_type'   => 'Tiny Text',
            '_refines'    => 'Title',
        ),
		
		// Label. Maps to <pbcoreTitle titleType="Label">.
		array(
            'label' => 'Label',
            'name'  => 'Label',
            /* 'description' => 'CAVPP: Please provide a cataloging note here.', */
            'data_type'   => 'Tiny Text',
            '_refines'    => 'Title',
        ),		
		
		// Description. Maps to <pbcoreDescription descriptionType="Abstract">
        array(
            'label' => 'Description or Content Summary',
            'name'  => 'Description or Content Summary',
            /* 'description' => 'Uses free-form text to report abstracts, or summaries about the intellectual content of a media item you are cataloging. The information may be in the form of a paragraph giving an individual program description or brief content reviews.', */
        ),
		
		// Date Published. Maps to <pbcoreAssetDate dateType="published">
        array(
            'label' => 'Date Published',
            'name'  => 'Date Published',
            /* 'description' => 'CAVPP: Please provide cataloging note here. Format: YYYY-MM-DD', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Contributors
		// // Camera
        array(
            'label' => 'Contributor - Camera',
            'name'  => 'Contributor - Camera',
            /* 'description' => 'Camera technician. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Cast
		array(
            'label' => 'Contributor - Cast',
            'name'  => 'Contributor - Cast',
            /* 'description' => 'Cast member. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Editor
        array(
            'label' => 'Contributor - Editor',
            'name'  => 'Contributor - Editor',
            /* 'description' => 'Editor. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),		
		
		// // Interviewee
        array(
            'label' => 'Contributor - Interviewee',
            'name'  => 'Contributor - Interviewee',
            /* 'description' => 'The person(s) being interviewed. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Music
        array(
            'label' => 'Contributor - Music',
            'name'  => 'Contributor - Music',
            /* 'description' => 'Music technician. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),		
		
		// // Sound
        array(
            'label' => 'Contributor - Sound',
            'name'  => 'Contributor - Sound',
            /* 'description' => 'Sound technician. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),		
		
		// // Speaker
        array(
            'label' => 'Contributor - Speaker',
            'name'  => 'Contributor - Speaker',
            /* 'description' => 'Speaker. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),		
		
		// Publishers
		// // Publisher
		array(
            'label' => 'Publisher - Publisher',
            'name'  => 'Publisher - Publisher',
            /* 'description' => 'Publisher. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Distributor
		array(
            'label' => 'Publisher - Distributor',
            'name'  => 'Publisher - Distributor',
            /* 'description' => 'Distributor. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),		
		
		// Language
		array(
            'label' => 'Language',
            'name'  => 'Language',
            /* 'description' => 'Language.', */
            'data_type'   => 'Tiny Text',
        ),		
		
		// Subject Topic
		array(
            'label' => 'Subject Topic',
            'name'  => 'Subject Topic',
            /* 'description' => 'Language.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Subject Entity
		array(
            'label' => 'Subject Entity',
            'name'  => 'Subject Entity',
            /* 'description' => 'Subject Entity. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),

		// Spatial Coverage
		array(
            'label' => 'Spatial Coverage',
            'name'  => 'Spatial Coverage',
            /* 'description' => 'Spatial Coverage.', */
            'data_type'   => 'Tiny Text',
        ),

		// Temporal Coverage
		array(
            'label' => 'Temporal Coverage',
            'name'  => 'Temporal Coverage',
            /* 'description' => 'Temporal Coverage. Format: YYYY-MM-DD', */
            'data_type'   => 'Tiny Text',
        ),

		// Genre
		array(
            'label' => 'Genre',
            'name'  => 'Genre',
            /* 'description' => 'Genre.', */
            'data_type'   => 'Tiny Text',
        ),

		// Cataloger Notes
		array(
            'label' => 'Cataloger Notes',
            'name'  => 'Cataloger Notes',
            /* 'description' => 'Cataloger Notes.', */
        ),

		// Additional Descriptive Notes
		array(
            'label' => 'Additional Descriptive Notes',
            'name'  => 'Additional Descriptive Notes',
            /* 'description' => 'Additional Descriptive Notes.', */
        ),

		// Additional Technical Notes
		array(
            'label' => 'Additional Technical Notes',
            'name'  => 'Additional Technical Notes',
            /* 'description' => 'Additional Technical Notes.', */
        ),

		//Collection Guide Title
		array(
            'label' => 'Collection Guide Title',
            'name'  => 'Collection Guide Title',
            /* 'description' => 'Collection Guide Title.', */
            'data_type'   => 'Tiny Text',
        ),

		// Collection Guide URL
		array(
            'label' => 'Collection Guide URL',
            'name'  => 'Collection Guide URL',
            /* 'description' => 'Collection Guide URL.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Physical Asset - Part Of
		array(
            'label' => 'Physical Asset - Part Of',
            'name'  => 'Physical Asset - Part Of',
            /* 'description' => 'Collection Guide URL.', */
            'data_type'   => 'Tiny Text',
        ),
	);
