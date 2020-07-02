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
${TRIP MENU}   trip_menu

# variable for gold usecase
${VIEW REVIEW MORE BUTTON}    viewMoreTrip
${CREATE TRIP BUTTON}    	create-trip
${TRIP NAME KEYWORD}    name
${COVER IMAGE KEYWORD}    cover_image
${DETAIL KEYWORD}    detail
${DATE START KEYWORD}    date_start
${DATE STOP KEYWORD}    date_stop
${TIME START KEYWORD}    time_start
${TIME STOP KEYWORD}    time_stop
${PRICE KEYWORD}    price
${AMOUNT KEYWORD}    amount
${PUBLISHED KEYWORD}    published_at
${PROVINCE KEYWORD}    province_list
${SUBMIT BUTTON}    submit
${DETAIL TRIP}    ชวนไหว้พระเก้าวัด เสริมสิริมงคล ส่งท้ายปีเก่าต้อนรับปีใหม๋ ณ จังหวัดสมุทรสาคร ฟรีตลอดทริป รับจำนวนจำกัด คลิกเพื่อสมัคร

# display trip
${CLICK TRIP LINK}    trip-25

# edit trip and display trip
${EDIT TRIP BUTTON}    edit-trip
${DETAIL TRIP KEYWORD}    detail

# delete trip
${DELETE TRIP BUTTON}    delete-trip

# unpublished trip_menu
${VIEW UNPUBLISHED TRIP BUTTON}    unpublished-trip

# logout menu
${LOGOUT MENU}   logout_menu

*** Testcases ***
Testing gold usecase

	# open browser
	Set Selenium Speed    0.2
	Open Browser    ${URL}    ${BROWSER}
	Maximize Browser Window
	Wait Until Page Contains    ${OBSCURE KEYWORD}

	# login
	Click Link    ${LOGIN MENU}
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Input Text    ${USER KEYWORD}    nonstop
	Input Password    ${PASS KEYWORD}    123456
	Click Button    login
	Set Selenium Speed    0.4

	# create trip
	Click Link    ${TRIP MENU}
	Click Link    ${VIEW REVIEW MORE BUTTON}
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Click Link    ${CREATE TRIP BUTTON}
	Input Text    ${TRIP NAME KEYWORD}    ชวนไหว้พระเก้าวัด เสริมสิริมงคล
	Choose File    ${COVER IMAGE KEYWORD}    C:\\Users\\nonstop\\Desktop\\trips_cover\\temple9.png
	Input Text    ${DETAIL KEYWORD}    ${DETAIL TRIP}
	Input Text    ${DATE START KEYWORD}    2018-11-17
	Input Text    ${TIME START KEYWORD}    09:00
	Input Text    ${DATE STOP KEYWORD}    2018-11-17
	Input Text    ${TIME STOP KEYWORD}    19:45
	Input Text    ${PRICE KEYWORD}    0
	Input Text    ${AMOUNT KEYWORD}    88
	Execute JavaScript    window.scrollTo(0,700)
	Input Text    ${PUBLISHED KEYWORD}    2018-11-12
	Select From List By Value    ${PROVINCE KEYWORD}    62
	Click Button    ${SUBMIT BUTTON}

	# edit trip
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Click Link    ${CLICK TRIP LINK}
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Click Link    ${DETAIL TRIP KEYWORD}
	Click Link    ${EDIT TRIP BUTTON}
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Input Text    ${DATE START KEYWORD}    2018-01-12
	Input Text    ${DATE STOP KEYWORD}    2018-01-12
	Input Text    ${TIME START KEYWORD}    07:30
	Input Text    ${TIME STOP KEYWORD}    18:30
	Input Text    ${AMOUNT KEYWORD}    99
	Execute JavaScript    window.scrollTo(0,700)
	Select From List By Value    ${PROVINCE KEYWORD}    62
	Click Button    ${SUBMIT BUTTON}

	# delete trip
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Click Link    ${CLICK TRIP LINK}
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Click Link    ${DETAIL TRIP KEYWORD}
	Set Selenium Speed    0.6
	Click Link    ${DELETE TRIP BUTTON}

	# view unpublished trips
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Click Link    ${VIEW UNPUBLISHED TRIP BUTTON}

	# logout and close browser
	Wait Until Page Contains    ${OBSCURE KEYWORD}
	Click Link    ${LOGOUT MENU}
	Set Selenium Speed    1.5
	Close Browser

*** Keywords ***
