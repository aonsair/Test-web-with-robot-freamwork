*** Settings ***
Library    Selenium2Library

*** Variables ***

# Open browser
${URL}    http://localhost:8000
${BROWSER}    firefox

# fixed obscure of Loading
${OBSCURE KEYWORD}    Loading...

# login menu
${LOGIN MENU}   login_menu
${USER KEYWORD}    email
${PASS KEYWORD}    password
${REVIEW MENU}   review_menu

# variable for member usecase
${VIEW REVIEW MORE BUTTON}    viewMoreReview

# edit review and comment
${CLICK REVIEW LINK}    review-29
${GOTO COMMENT}    goto-commnet
${EDIT REVIEW BUTTON}    edit-review
${INPUT COMMENT}    detail
${PUBLISHED KEYWORD}    published_at
${SUBMIT BUTTON}    submit

# unpublished trip_menu
${VIEW UNPUBLISHED REVIEW BUTTON}    unpublished-review

# delete REVIEW
${DELETE REVIEW BUTTON}    delete-review

# logout menu
${LOGOUT MENU}   logout_menu

*** Testcases ***
Testing member usecase

	# open browser
	Set Selenium Speed    0.2
	Open Browser    ${URL}    ${BROWSER}
	Maximize Browser Window
	Wait Until Page Contains    ${OBSCURE KEYWORD}

	# login
	Click Link    ${LOGIN MENU}
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Input Text    ${USER KEYWORD}    kookkai
	Input Password    ${PASS KEYWORD}    123456
	Click Button    login
	Set Selenium Speed    0.4

	# edit review and comment
	Click Link    ${REVIEW MENU}
	Click Link    ${VIEW REVIEW MORE BUTTON}
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Click Link    ${CLICK REVIEW LINK}
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Click Link    ${GOTO COMMENT}
	Set Selenium Speed    0.6
	Input Text    ${INPUT COMMENT}    เทสระบบคอมเม้นต์
	Click Button    ${SUBMIT BUTTON}
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Click Link    ${GOTO COMMENT}
	Set Selenium Speed    0.6
	Click Link    ${EDIT REVIEW BUTTON}
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Execute JavaScript    window.scrollTo(0,700)
	Input Text    ${PUBLISHED KEYWORD}    2018-12-10
	Click Button    ${SUBMIT BUTTON}
	Set Selenium Speed    0.4

  # view unpublished reviews
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Click Link    ${VIEW UNPUBLISHED REVIEW BUTTON}
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Click Link    ${CLICK REVIEW LINK}

	# delete review
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Click Link    ${DELETE REVIEW BUTTON}
	Wait Until Page Contains    ${OBSCURE KEYWORD}

	# logout and close browser
	Click Link    ${LOGOUT MENU}
	Set Selenium Speed    1.5
	Close Browser

*** Keywords ***
