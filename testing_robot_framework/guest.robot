*** Settings ***
Library    Selenium2Library

*** Variables ***

# open browser
${URL}    http://localhost:8000
${BROWSER}    firefox

# click trip and reivew menu on navbar
${TRIP MENU}   trip_menu
${REVIEW MENU}   review_menu

# fixed obscure of Loading
${OBSCURE KEYWORD}    Loading...

# display trip, review and comment
${CLICK TRIP LINK}    trip-11
${DETAIL TRIP KEYWORD}    detail
${CLICK REVIEW LINK}    review-17
${COMMENT KEYWORD}    comment

*** Testcases ***
Testing guest usecase

	# open browser
	Set Selenium Speed    0.2
	Open Browser    ${URL}    ${BROWSER}
	Maximize Browser Window
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Set Selenium Speed    0.3

	# view trip
	Click Link    ${TRIP MENU}
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Click Link    viewMoreTrip
	Set Selenium Speed    0.5
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Click Link    ${CLICK TRIP LINK}
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Set Selenium Speed    1
	Click Link    ${DETAIL TRIP KEYWORD}
	Set Selenium Speed    0.5

	# view review
	Click Link    ${REVIEW MENU}
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Click Link    ${CLICK REVIEW LINK}
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Set Selenium Speed    1
	Click Link    ${COMMENT KEYWORD}
	Set Selenium Speed    0.5
	Wait Until Page Contains    ${OBSCURE KEYWORD}

	# join trip
	Click Link    home_menu
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Click Link    ${TRIP MENU}
	Click Link    joinTrip
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Close Browser

*** Keywords ***
