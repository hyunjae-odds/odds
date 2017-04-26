<body>
<form method="post" action="./Basic2.aspx" id="mainForm">
    <div class="aspNetHidden">




    </div>

    <script type="text/javascript">
        //<![CDATA[
        var theForm = document.forms['mainForm'];
        if (!theForm) {
            theForm = document.mainForm;
        }
        function __doPostBack(eventTarget, eventArgument) {
            if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                theForm.__EVENTTARGET.value = eventTarget;
                theForm.__EVENTARGUMENT.value = eventArgument;
                theForm.submit();
            }
        }
        //]]>
    </script>


    <script src="/WebResource.axd?d=oxHRNNk5kZiP0dh3Vm2N0xqj8RPWpdJom62rJh6Az7sFxG4KJTTv-mPTmtm6itqJLpP2oT2z3vW8S2mZ_6jo4Oke3JPjI75BS6aUTtNVTGs1&amp;t=636161582620000000" type="text/javascript"></script>


    <script src="/ScriptResource.axd?d=TudnsgX3sPFYN-F6k3iGg_FEWgnj26n4FWyqf9_ExWhoJCJpzz9mKfd72vMOFbtP4i7kt51NbbHhTOtGcPtwtQC3O1bwmrkfDnu-5A-QN21fRnbUGgGlqO7lW8KTju_jrOUCg4744n_Szgn-rCqQIejsR0B-n2NI40zOA-EoV7-ZQNelV8unnfUWYYc_Hl8a0&amp;t=ffffffff977ec8ef" type="text/javascript"></script>
    <script type="text/javascript">
        //<![CDATA[
        if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax 클라이언트 쪽 프레임워크를 로드하지 못했습니다.');
        //]]>
    </script>

    <script src="/ScriptResource.axd?d=saRxMya7Jyl_BzpHj7qcKTRNrnyT4oeoMYqjeVB31jckRu9bavYTCJ17iwUWAwpoj1fPXGC-j6QK8F3rQ14OKLXwmM5Xo9En3xJqWL-MEl_15aLeWlTzj8RPI-y1EbTj_XU904iGB_kZHQ1tSBiE_PKO09466hPqXP14lelRSl28lK_9QSnoIWb5ddl_BnH20&amp;t=ffffffff977ec8ef" type="text/javascript"></script>
    <div class="aspNetHidden">



    </div>
    <!-- wrap -->
    <div id="wrap">
        <!-- header -->
        <header>
            <div id="gnb" class="bgf3">
                <div class="gnb-wrap">
                    <ul class="menu">

                        <li><a href="/Member/Login.aspx">로그인</a></li>
                        <li><a href="/Member/Join/Accessterms.aspx">회원가입</a></li>

                        <li><a href="http://eng.koreabaseball.com/">ENGLISH</a></li>
                    </ul>
                    <div class="search-area">
                        <div class="search-box">
                            <input class="ipt-search" type="text" id="txtTopPlayerWord" placeholder="선수 검색하기">
                            <a href="#none;" id="btnTopPlayerSearch" class="btn-search"><img src="//image.koreabaseball.com/resources/images/common/btn_search.png" alt="검색"></a>
                        </div>
                        <div id="player_search_area" class="search-result">
                            <!-- <p class="null">검색 결과가 없습니다.</p> -->

                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapping lnb-wrap">
                <h1 class="logo"><a href="/Default.aspx"><img src="//image.koreabaseball.com/resources/images/common/h1_logo.png" alt=""></a></h1>
                <nav>
                    <ul id="lnb">
                        <li>
                            <a href="/Schedule/GameCenter/Main.aspx">일정/결과</a>
                            <div class="lnb-sub">
                                <ul class="lnb01">
                                    <li><a href="/Schedule/GameCenter/Main.aspx">게임센터</a></li>
                                    <li><a href="/Schedule/ScoreBoard.aspx">스코어보드</a></li>
                                    <li><a href="/Schedule/Schedule.aspx">경기일정/결과</a></li>
                                    <li><a href="/Schedule/CalendarSchedule.aspx">월별일정/결과</a></li>
                                    <li><a href="/Schedule/International/Wbc/Main2017.aspx">국제대회</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="/TeamRank/TeamRank.aspx">순위</a>
                            <div class="lnb-sub">
                                <ul class="lnb02">
                                    <li><a href="/TeamRank/TeamRank.aspx">팀순위</a></li>
                                    <li><a href="/TeamRank/GraphDaily.aspx">팀별 순위변동 그래프</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="/Record/Main.aspx">기록</a>
                            <div class="lnb-sub">
                                <ul class="lnb03">
                                    <li><a href="/Record/Main.aspx">TOP5</a></li>
                                    <li><a href="/Record/Player/HitterBasic/Basic1.aspx">기록실</a></li>
                                    <li><a href="/Record/Etc/HitVsPit.aspx">투수 vs 타자</a></li>
                                    <li><a href="/Record/History/Top/Hitter.aspx">역대기록실</a></li>
                                    <li><a href="/Record/Expectation/WeekList.aspx">주간/일간 예상 달성기록</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="/Player/Search.aspx">선수</a>
                            <div class="lnb-sub">
                                <ul class="lnb04">
                                    <li><a href="/Player/Search.aspx">선수조회</a></li>
                                    <li><a href="/Player/Register.aspx">선수등록현황</a></li>
                                    <li><a href="/Player/RegisterAll.aspx">전체등록현황</a></li>
                                    <li><a href="/Player/CareerCertificate.aspx">경력증명서 신청</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="/Futures/Schedule/GameList.aspx">퓨처스리그</a>
                            <div class="lnb-sub">
                                <ul class="lnb05">
                                    <li><a href="/Futures/Schedule/GameList.aspx">경기일정/결과</a></li>
                                    <li><a href="/Futures/TeamRank/North.aspx">팀순위</a></li>
                                    <li><a href="/Futures/Main/Main.aspx">TOP5</a></li>
                                    <li><a href="/Futures/Player/Hitter.aspx">기록실</a></li>
                                    <li><a href="/Futures/InfoGraphic/List.aspx">인포그래픽</a></li>
                                    <li><a href="/Futures/Webtoon/List.aspx">웹툰</a></li>
                                    <li><a href="/Futures/GameSketch/List.aspx">경기스케치	</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="">
                            <a href="/News/Preview/List.aspx">NEWS</a>
                            <div class="lnb-sub">
                                <ul class="lnb06">
                                    <li><a href="/News/Preview/List.aspx">NEWS</a></li>
                                    <li><a href="/News/Notice/List.aspx">KBO 보도자료</a></li>

                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;">KBO</a>
                            <div class="lnb-sub lnb-style-all">
                                <div class="wrapping lnb-all-wrap">
                                    <h3>KBO</h3>
                                    <div class="lnb-all kbo01">
                                        <h4>HISTORY</h4>
                                        <ul>
                                            <li><a href="/History/Crowd/GraphTeam.aspx">관중현황</a></li>
                                            <li><a href="/History/Etc/PlayerPrize.aspx">역대 개인수상</a></li>
                                            <li><a href="/History/Etc/GoldenGlove.aspx">역대 골든글러브</a></li>
                                            <li><a href="/History/Etc/GameManage.aspx">경기운영제도</a></li>
                                            <li><a href="/History/Etc/TeamHistory.aspx">각 구단 변천사</a></li>
                                        </ul>
                                    </div>
                                    <div class="lnb-all kbo02">
                                        <h4>KBO TV</h4>
                                        <ul>
                                            <li><a href="/KboTv/Highlight/List.aspx">하이라이트</a></li>
                                            <li><a href="/KboTv/MonthMvp/List.aspx">월간MVP</a></li>
                                            <li><a href="/KboTv/Legend/List.aspx">레전드 올스타 동영상</a></li>
                                            <li><a href="/KboTv/Event/List.aspx">KBO 영상</a></li>
                                            <li><a href="/KboTv/VeteranInterview/List.aspx">야구 원로 인터뷰</a></li>
                                        </ul>
                                    </div>
                                    <div class="lnb-all kbo03">
                                        <h4>게시판</h4>
                                        <ul>
                                            <li><a href="/Board/Notice/List.aspx">NOTICE</a></li>
                                            <li><a href="/Board/Faq/List.aspx">자주하는질문</a></li>
                                            <li><a href="/Board/Qna/List.aspx">Q&amp;A게시판</a></li>
                                            <li><a href="/Board/Free/List.aspx">자유게시판</a></li>
                                            <li><a href="/Board/Committee/List.aspx">기록위원회 Q&amp;A게시판</a></li>
                                            <li><a href="/Board/Committee/RecordBook.aspx">기록교재 신청하기</a></li>
                                        </ul>
                                    </div>
                                    <div class="lnb-all kbo04">
                                        <h4>자료실</h4>
                                        <ul>
                                            <li><a href="/Reference/Etc/Amazing.aspx">진기록 명기록</a></li>
                                            <li><a href="/Reference/Ebook/Ebook2017.aspx">E-BOOK</a></li>
                                            <li><a href="/Reference/OnlineLecture/List.aspx">초급자용 사이버야구교실</a></li>
                                            <li><a href="/Reference/Etc/GameRule.aspx">경기규칙</a></li>
                                        </ul>
                                    </div>
                                    <div class="lnb-all kbo05">
                                        <h4>ABOUT KBO</h4>
                                        <ul>
                                            <li><a href="/About/Etc/TeamInfo.aspx">구단 소개</a></li>
                                            <li><a href="/About/Group/Activity.aspx">조직 및 활동</a></li>
                                            <li><a href="/Event/Etc/OfficialChannel.aspx">KBO 공식 채널</a></li>
                                            <li><a href="/About/Etc/KboCi.aspx">KBO CI / 캐치프레이즈</a></li>
                                            <li><a href="/About/Etc/Map.aspx">약도 / 관람료</a></li>
                                            <li><a href="/About/Committee/OrganizationChart.aspx">기록위원회</a></li>
                                            <li><a href="/About/Etc/CleanCenter1.aspx">클린베이스볼센터</a></li>
                                        </ul>
                                    </div>
                                    <div class="lnb-all kbo06">
                                        <h4>주요 사업/행사</h4>
                                        <ul>
                                            <li><a href="/Event/Etc/TimeLine.aspx">2017 타임라인</a></li>
                                            <li><a href="/Event/RecordClass/Professional.aspx">기록강습회</a></li>
                                            <li><a href="/Event/Etc/WinterMeeting.aspx">KBO 윈터미팅</a></li>
                                            <li><a href="/Event/Etc/Safe.aspx">SAFE 캠페인</a></li>
                                            <li><a href="/Event/Contribution/Service2016.aspx">KBO 사회공헌 사업</a></li>
                                            <li><a href="/Event/DreamSave/2017/List.aspx">Dream Save</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li id="market"><a href="https://www.kbomarket.com/" target="_blank">KBO 마켓</a></li>
                        <li id="lnbAll">
                            <a href="javascript:;">전체 메뉴</a>
                            <div class="lnb-sub lnb-style-all">
                                <div class="wrapping lnb-all-wrap">
                                    <div class="line line01">
                                        <h3>전체 메뉴</h3>
                                        <div class="lnb-all menu01">
                                            <h4>일정/결과</h4>
                                            <ul>
                                                <li><a href="/Schedule/GameCenter/Main.aspx">게임센터</a></li>
                                                <li><a href="/Schedule/ScoreBoard.aspx">스코어보드</a></li>
                                                <li><a href="/Schedule/Schedule.aspx">경기일정/결과</a></li>
                                                <li><a href="/Shceudle/CalendarSchedule.aspx">월별일정/결과</a></li>
                                                <li><a href="/Schedule/International/Wbc/Main2017.aspx">국제대회</a></li>
                                            </ul>
                                        </div>
                                        <div class="lnb-all menu02">
                                            <h4>순위</h4>
                                            <ul>
                                                <li><a href="/TeamRank/TeamRank.aspx">팀순위</a></li>
                                                <li><a href="/TeamRank/GraphDaily.aspx">팀별 순위변동 그래프</a></li>
                                            </ul>
                                        </div>
                                        <div class="lnb-all menu03">
                                            <h4>기록</h4>
                                            <ul>
                                                <li><a href="/Record/Main.aspx">TOP5</a></li>
                                                <li><a href="/Record/Player/HitterBasic/Basic1.aspx">기록실</a></li>
                                                <li><a href="/Record/Etc/HitVsPit.aspx">투수 vs 타자</a></li>
                                                <li><a href="/Record/History/Top/Hitter.aspx">역대기록실</a></li>
                                                <li class="menu0305"><a href="/Record/Expectation/WeekList.aspx">주간/일간 예상 달성기록</a></li>
                                            </ul>
                                        </div>
                                        <div class="lnb-all menu04">
                                            <h4>선수</h4>
                                            <ul>
                                                <li><a href="/Player/Search.aspx">선수조회</a></li>
                                                <li><a href="/Player/Register.aspx">선수등록현황</a></li>
                                                <li><a href="/Player/RegisterAll.aspx">전체등록현황</a></li>
                                                <li><a href="/Player/CareerCertificate.aspx">경력증명서 신청</a></li>
                                            </ul>
                                        </div>
                                        <div class="lnb-all menu05">
                                            <h4>퓨처스리그</h4>
                                            <ul>
                                                <li><a href="/Futures/Schedule/GameList.aspx">경기일정/결과</a></li>
                                                <li><a href="/Futures/TeamRank/North.aspx">팀순위</a></li>
                                                <li><a href="/Futures/Main/Main.aspx">TOP5</a></li>
                                                <li><a href="/Futures/Player/Hitter.aspx">기록실</a></li>
                                                <li><a href="/Futures/InfoGraphic/List.aspx">인포그래픽</a></li>
                                                <li><a href="/Futures/Webtoon/List.aspx">웹툰</a></li>
                                                <li><a href="/Futures/GameSketch/List.aspx">경기스케치</a></li>
                                            </ul>
                                        </div>
                                        <div class="lnb-all menu06">
                                            <h4>NEWS</h4>
                                            <ul>
                                                <li><a href="/News/Preview/List.aspx">NEWS</a></li>
                                                <li><a href="/News/Notice/List.aspx">KBO 보도자료</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="line line02">
                                        <h3>KBO</h3>
                                        <div class="lnb-all menu07">
                                            <h4>HISTORY</h4>
                                            <ul>
                                                <li><a href="/History/Crowd/GraphTeam.aspx">관중현황</a></li>
                                                <li><a href="/History/Etc/PlayerPrize.aspx">역대 개인수상</a></li>
                                                <li><a href="/History/Etc/GoldenGlove.aspx">역대 골든글러브</a></li>
                                                <li><a href="/History/Etc/GameManage.aspx">경기운영제도</a></li>
                                                <li><a href="/History/Etc/TeamHistory.aspx">각 구단 변천사</a></li>
                                            </ul>
                                        </div>
                                        <div class="lnb-all menu08">
                                            <h4>KBO TV</h4>
                                            <ul>
                                                <li><a href="/KboTv/Highlight/List.aspx">하이라이트</a></li>
                                                <li><a href="/KboTv/MonthMvp/List.aspx">월간MVP</a></li>
                                                <li><a href="/KboTv/Legend/List.aspx">레전드 올스타 동영상</a></li>
                                                <li><a href="/KboTv/Event/List.aspx">KBO 영상</a></li>
                                                <li><a href="/KboTv/VeteranInterview/List.aspx">야구 원로 인터뷰</a></li>
                                            </ul>
                                        </div>
                                        <div class="lnb-all menu09">
                                            <h4>게시판</h4>
                                            <ul>
                                                <li><a href="/Board/Notice/List.aspx">NOTICE</a></li>
                                                <li><a href="/Board/Faq/List.aspx">자주하는질문</a></li>
                                                <li><a href="/Board/Qna/List.aspx">Q&amp;A게시판</a></li>
                                                <li><a href="/Board/Free/List.aspx">자유게시판</a></li>
                                                <li><a href="/Board/Committee/List.aspx">기록위원회 Q&amp;A게시판</a></li>
                                                <li><a href="/Board/Committee/RecordBook.aspx">기록교재 신청하기</a></li>
                                            </ul>
                                        </div>
                                        <div class="lnb-all menu10 ">
                                            <h4>자료실</h4>
                                            <ul>
                                                <li><a href="/Reference/Etc/Amazing.aspx">진기록 명기록</a></li>
                                                <li><a href="/Reference/Ebook/Ebook2017.aspx">E-BOOK</a></li>
                                                <li><a href="/Reference/OnlineLecture/List.aspx">초급자용 사이버야구교실</a></li>
                                                <li><a href="/Reference/Etc/GameRule.aspx">경기규칙</a></li>
                                            </ul>
                                        </div>
                                        <div class="lnb-all menu11">
                                            <h4>ABOUT KBO</h4>
                                            <ul>
                                                <li><a href="/About/Etc/TeamInfo.aspx">구단 소개</a></li>
                                                <li><a href="/About/Group/Activity.aspx">조직 및 활동</a></li>
                                                <li><a href="/Event/Etc/OfficialChannel.aspx">KBO 공식 채널</a></li>
                                                <li><a href="/About/Etc/KboCi.aspx">KBO CI / 캐치프레이즈</a></li>
                                                <li><a href="/About/Etc/Map.aspx">약도 / 관람료</a></li>
                                                <li><a href="/About/Committee/OrganizationChart.aspx">기록위원회</a></li>
                                                <li><a href="/About/Etc/CleanCenter1.aspx">클린베이스볼센터</a></li>
                                            </ul>
                                        </div>
                                        <div class="lnb-all menu12">
                                            <h4>주요 사업/행사</h4>
                                            <ul>
                                                <li><a href="/Event/Etc/TimeLine.aspx">2017 타임라인</a></li>
                                                <li><a href="/Event/RecordClass/Professional.aspx">기록강습회</a></li>
                                                <li><a href="/Event/Etc/WinterMeeting.aspx">KBO 윈터미팅</a></li>
                                                <li><a href="/Event/Etc/Safe.aspx">SAFE 캠페인</a></li>
                                                <li><a href="/Event/Contribution/Service2016.aspx">KBO 사회공헌 사업</a></li>
                                                <li><a href="/Event/DreamSave/2017/List.aspx">Dream Save</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-close">
                                    <a href="javascript:;">
                                        <img src="//image.koreabaseball.com/resources/images/common/btn_close_fff.png" alt="">
                                        <span>닫기</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- // header -->
        <hr>
        <!-- container -->


        <section id="container">
            <div class="wrapping container-wrap">
                <aside>
                    <h3>기록</h3>
                    <ul id="snb">
                        <li><a href="/Record/Main.aspx" id="lnb01">TOP5</a></li>
                        <li class="on"><a href="/Record/Player/HitterBasic/Basic1.aspx" id="lnb02">기록실</a></li>
                        <li><a href="/Record/Etc/HitVsPit.aspx" id="lnb03">투수 vs 타자</a></li>
                        <li><a href="/Record/History/Top/Hitter.aspx" id="lnb04">역대기록실</a></li>
                        <li><a href="/Record/Expectation/WeekList.aspx" id="lnb05">주간/일간 예상 달성기록</a></li>
                    </ul>

                </aside>

                <script type="text/javascript">
                    //<![CDATA[
                    Sys.WebForms.PageRequestManager._initialize('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$smData', 'mainForm', ['tctl00$ctl00$ctl00$cphContents$cphContents$cphContents$udpContent','cphContents_cphContents_cphContents_udpContent'], ['ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$lbtnOrderBy','cphContents_cphContents_cphContents_lbtnOrderBy','ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSeason','cphContents_cphContents_cphContents_ddlSeason','ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSeries','cphContents_cphContents_cphContents_ddlSeries','ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlTeam','cphContents_cphContents_cphContents_ddlTeam','ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlPos','cphContents_cphContents_cphContents_ddlPos','ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSituation','cphContents_cphContents_cphContents_ddlSituation','ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSituationDetail','cphContents_cphContents_cphContents_ddlSituationDetail'], [], 90, 'ctl00$ctl00$ctl00');
                    //]]>
                </script>

                <div id="contents">
                    <!--sub title & location -->
                    <div class="location">
                        <span class="home"><a href="/Default.aspx"><img src="/resources/images/common/ico_home.gif" alt="홈으로"></a></span> &gt;
                        <span class="depth1"><a href="/Record/Main.aspx">기록</a></span> &gt;
                        <span class="depth2">기록실</span>
                    </div>
                    <h4 class="tit-page">기록실</h4>
                    <!-- // sub title & location -->

                    <div class="sub-content">
                        <div class="tab-depth1">
                            <ul class="tab">
                                <li class="on"><a href="/Record/Player/HitterBasic/Basic1.aspx">선수기록</a></li>
                                <li><a href="/Record/Team/Hitter/Basic1.aspx">팀기록</a></li>
                            </ul>
                            <span class="record_words"><a href="#"><img src="http://image.koreabaseball.com/client/images/record/btn_record_words.png" alt="기록용어"></a></span>
                            <div class="words" id="words">
                            </div>
                        </div>
                        <div class="tab-depth2">
                            <ul class="tab">
                                <li class="on"> <a href="/Record/Player/HitterBasic/Basic1.aspx">타자</a></li>
                                <li> <a href="/Record/Player/PitcherBasic/Basic1.aspx">투수</a></li>
                                <li> <a href="/Record/Player/Defense/Basic.aspx">수비</a></li>
                                <li class="last"> <a href="/Record/Player/Runner/Basic.aspx">주루</a></li>
                            </ul>
                        </div>

                        <div id="cphContents_cphContents_cphContents_udpContent">
                            <div class="compare">

                                <div class="styled-select02 mt5 bar01">
                                    <select name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSeason$ddlSeason" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSeason$ddlSeason\',\'\')', 0)" id="cphContents_cphContents_cphContents_ddlSeason_ddlSeason" class="select03">
                                        <option value="1982">1982</option>
                                        <option value="1983">1983</option>
                                        <option value="1984">1984</option>
                                        <option value="1985">1985</option>
                                        <option value="1986">1986</option>
                                        <option value="1987">1987</option>
                                        <option value="1988">1988</option>
                                        <option value="1989">1989</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option selected="selected" value="2017">2017</option>
                                        <option value="9999">전체</option>

                                    </select>
                                </div>
                                <span class="bar">|</span>

                                <div class="styled-select03 mt5" style="width:130px">
                                    <select name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSeries$ddlSeries" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSeries$ddlSeries\',\'\')', 0)" id="cphContents_cphContents_cphContents_ddlSeries_ddlSeries" class="select02" style="width:150px;">
                                        <option selected="selected" value="0">KBO 정규시즌</option>
                                        <option value="1">KBO 시범경기</option>
                                        <option value="4">KBO 와일드카드</option>
                                        <option value="3">KBO 준플레이오프</option>
                                        <option value="5">KBO 플레이오프</option>
                                        <option value="7">KBO 한국시리즈</option>

                                    </select>
                                </div>

                                <div class="styled-select03 mt5">
                                    <select name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlTeam$ddlTeam" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlTeam$ddlTeam\',\'\')', 0)" id="cphContents_cphContents_cphContents_ddlTeam_ddlTeam" class="select02">
                                        <option selected="selected" value="">팀 선택</option>
                                        <option value="WO">넥센</option>
                                        <option value="OB">두산</option>
                                        <option value="LT">롯데</option>
                                        <option value="SS">삼성</option>
                                        <option value="HH">한화</option>
                                        <option value="HT">KIA</option>
                                        <option value="KT">kt</option>
                                        <option value="LG">LG</option>
                                        <option value="NC">NC</option>
                                        <option value="SK">SK</option>

                                    </select>
                                </div>

                                <div class="styled-select03 mt5">
                                    <select name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlPos$ddlPos" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlPos$ddlPos\',\'\')', 0)" id="cphContents_cphContents_cphContents_ddlPos_ddlPos" class="select02">
                                        <option selected="selected" value="">포지션 선택</option>
                                        <option value="2">포수</option>
                                        <option value="3,4,5,6">내야수</option>
                                        <option value="7,8,9">외야수</option>

                                    </select>
                                </div>

                                <div class="styled-select03 mt5">
                                    <select name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSituation$ddlSituation" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSituation$ddlSituation\',\'\')', 0)" id="cphContents_cphContents_cphContents_ddlSituation_ddlSituation" class="select02">
                                        <option selected="selected" value="">경기상황별1</option>
                                        <option value="MONTH_SC">월별</option>
                                        <option value="WEEK_SC">요일별</option>
                                        <option value="STADIUM_SC">구장별</option>
                                        <option value="HOMEAYAY_SC">홈/방문별</option>
                                        <option value="OPPTEAM_SC">상대팀별</option>
                                        <option value="DAYNIGHT_SC">주/야간별</option>
                                        <option value="HALF_SC">전/후반기별</option>
                                        <option value="41">투수유형별</option>
                                        <option value="43">주자상황별</option>
                                        <option value="44">볼카운트별</option>
                                        <option value="45">아웃카운트별</option>
                                        <option value="46">이닝별</option>
                                        <option value="47">타순별</option>

                                    </select>
                                </div>

                                <div class="styled-select03 mt5">
                                    <select name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSituationDetail$ddlSituationDetail" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSituationDetail$ddlSituationDetail\',\'\')', 0)" id="cphContents_cphContents_cphContents_ddlSituationDetail_ddlSituationDetail" class="select02">
                                        <option selected="selected" value="">경기상황별2</option>

                                    </select>
                                </div>
                            </div>

                            <h4 class="bul_history mt30"> 타자기록</h4>
                            <div class="row">
                                <div class="tab-depth3">
                                    <ul class="tab">
                                        <li class="on"><a href="/Record/Player/HitterBasic/Basic1.aspx">기본기록</a>|</li>
                                        <li><a href="/Record/Player/HitterBasic/Detail1.aspx">세부기록</a></li>
                                    </ul>
                                </div>
                                <div class="more_record">
                                    <a href="/Record/Player/HitterBasic/Basic1.aspx" class="prev">이전</a>
                                    <span>기록보기</span>
                                    <a href="/Record/Player/HitterBasic/Basic2.aspx" class="next">다음</a>
                                </div>
                            </div>

                            <div class="record_result">
                                <table class="tData01 tt" cellspacing="0" cellpadding="0" summary="선수 기본기록으로 타율, 볼넷, 고의사구, 삼진, 병살, 장타율, 출루율 등을 표시합니다">
                                    <colgroup>
                                        <col width="50">
                                        <col width="80">
                                        <col width="50">
                                        <col width="60">
                                        <col width="60">
                                        <col width="70">
                                        <col width="70">
                                        <col width="70">
                                        <col width="70">
                                        <col width="70">
                                        <col width="70">
                                        <col width="70">
                                        <col width="70">
                                        <col width="70">
                                        <col width="70">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th>순위</th>
                                        <th>선수명</th>
                                        <th>팀명</th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('HRA_RT');" title="타율">AVG</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('BB_CN');" title="볼넷">BB</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('IB_CN');" title="고의4구">IBB</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('HP_CN');" title="사구">HBP</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('KK_CN');" title="삼진">SO</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('GD_CN');" title="병살타">GDP</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('SLG_RT');" title="장타율">SLG</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('OBP_RT');" title="출루율">OBP</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('OPS_RT');" title="출루율+장타율">OPS</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('MH_HITTER_CN');" title="멀티히트">MH</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('SP_HRA_RT');" title="득점권타율">RISP</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('PH_HRA_RT');" title="대타타율">PH-BA</a></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td>31</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=67935">스크럭스</a></td>
                                        <td>NC</td>
                                        <td data-id="HRA_RT" class="asc">0.292</td>
                                        <td data-id="BB_CN">17</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">3</td>
                                        <td data-id="KK_CN">22</td>
                                        <td data-id="GD_CN">2</td>
                                        <td data-id="SLG_RT">0.597</td>
                                        <td data-id="OBP_RT">0.446</td>
                                        <td data-id="OPS_RT">1.043</td>
                                        <td data-id="MH_HITTER_CN">7</td>
                                        <td data-id="SP_HRA_RT">0.167</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>32</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=77532">손아섭</a></td>
                                        <td>롯데</td>
                                        <td data-id="HRA_RT" class="asc">0.288</td>
                                        <td data-id="BB_CN">14</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">11</td>
                                        <td data-id="GD_CN">1</td>
                                        <td data-id="SLG_RT">0.350</td>
                                        <td data-id="OBP_RT">0.396</td>
                                        <td data-id="OPS_RT">0.746</td>
                                        <td data-id="MH_HITTER_CN">7</td>
                                        <td data-id="SP_HRA_RT">0.389</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>33</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=79109">오지환</a></td>
                                        <td>LG</td>
                                        <td data-id="HRA_RT" class="asc">0.284</td>
                                        <td data-id="BB_CN">9</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">22</td>
                                        <td data-id="GD_CN">4</td>
                                        <td data-id="SLG_RT">0.459</td>
                                        <td data-id="OBP_RT">0.357</td>
                                        <td data-id="OPS_RT">0.816</td>
                                        <td data-id="MH_HITTER_CN">6</td>
                                        <td data-id="SP_HRA_RT">0.333</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>34</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=71347">장민석</a></td>
                                        <td>한화</td>
                                        <td data-id="HRA_RT" class="asc">0.282</td>
                                        <td data-id="BB_CN">7</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">17</td>
                                        <td data-id="GD_CN">0</td>
                                        <td data-id="SLG_RT">0.318</td>
                                        <td data-id="OBP_RT">0.337</td>
                                        <td data-id="OPS_RT">0.655</td>
                                        <td data-id="MH_HITTER_CN">6</td>
                                        <td data-id="SP_HRA_RT">0.294</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>35</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=73306">지석훈</a></td>
                                        <td>NC</td>
                                        <td data-id="HRA_RT" class="asc">0.281</td>
                                        <td data-id="BB_CN">4</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">5</td>
                                        <td data-id="KK_CN">15</td>
                                        <td data-id="GD_CN">1</td>
                                        <td data-id="SLG_RT">0.422</td>
                                        <td data-id="OBP_RT">0.365</td>
                                        <td data-id="OPS_RT">0.787</td>
                                        <td data-id="MH_HITTER_CN">6</td>
                                        <td data-id="SP_HRA_RT">0.263</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>36</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=71552">최준석</a></td>
                                        <td>롯데</td>
                                        <td data-id="HRA_RT" class="asc">0.279</td>
                                        <td data-id="BB_CN">8</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">11</td>
                                        <td data-id="GD_CN">3</td>
                                        <td data-id="SLG_RT">0.426</td>
                                        <td data-id="OBP_RT">0.352</td>
                                        <td data-id="OPS_RT">0.778</td>
                                        <td data-id="MH_HITTER_CN">5</td>
                                        <td data-id="SP_HRA_RT">0.214</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>37</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=74540">강민호</a></td>
                                        <td>롯데</td>
                                        <td data-id="HRA_RT" class="asc">0.274</td>
                                        <td data-id="BB_CN">7</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">2</td>
                                        <td data-id="KK_CN">19</td>
                                        <td data-id="GD_CN">3</td>
                                        <td data-id="SLG_RT">0.484</td>
                                        <td data-id="OBP_RT">0.356</td>
                                        <td data-id="OPS_RT">0.840</td>
                                        <td data-id="MH_HITTER_CN">5</td>
                                        <td data-id="SP_HRA_RT">0.188</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>37</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=99810">이진영</a></td>
                                        <td>kt</td>
                                        <td data-id="HRA_RT" class="asc">0.274</td>
                                        <td data-id="BB_CN">2</td>
                                        <td data-id="IB_CN">1</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">7</td>
                                        <td data-id="GD_CN">0</td>
                                        <td data-id="SLG_RT">0.339</td>
                                        <td data-id="OBP_RT">0.297</td>
                                        <td data-id="OPS_RT">0.636</td>
                                        <td data-id="MH_HITTER_CN">3</td>
                                        <td data-id="SP_HRA_RT">0.154</td>
                                        <td data-id="PH_HRA_RT">0.400</td>
                                    </tr>

                                    <tr>
                                        <td>39</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=71837">김강민</a></td>
                                        <td>SK</td>
                                        <td data-id="HRA_RT" class="asc">0.271</td>
                                        <td data-id="BB_CN">6</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">15</td>
                                        <td data-id="GD_CN">2</td>
                                        <td data-id="SLG_RT">0.339</td>
                                        <td data-id="OBP_RT">0.338</td>
                                        <td data-id="OPS_RT">0.677</td>
                                        <td data-id="MH_HITTER_CN">2</td>
                                        <td data-id="SP_HRA_RT">0.615</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>39</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=76509">김문호</a></td>
                                        <td>롯데</td>
                                        <td data-id="HRA_RT" class="asc">0.271</td>
                                        <td data-id="BB_CN">8</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">3</td>
                                        <td data-id="KK_CN">15</td>
                                        <td data-id="GD_CN">1</td>
                                        <td data-id="SLG_RT">0.305</td>
                                        <td data-id="OBP_RT">0.386</td>
                                        <td data-id="OPS_RT">0.691</td>
                                        <td data-id="MH_HITTER_CN">3</td>
                                        <td data-id="SP_HRA_RT">0.222</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>41</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=78122">김태군</a></td>
                                        <td>NC</td>
                                        <td data-id="HRA_RT" class="asc">0.270</td>
                                        <td data-id="BB_CN">0</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">5</td>
                                        <td data-id="KK_CN">6</td>
                                        <td data-id="GD_CN">3</td>
                                        <td data-id="SLG_RT">0.317</td>
                                        <td data-id="OBP_RT">0.319</td>
                                        <td data-id="OPS_RT">0.636</td>
                                        <td data-id="MH_HITTER_CN">5</td>
                                        <td data-id="SP_HRA_RT">0.313</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>42</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=62404">구자욱</a></td>
                                        <td>삼성</td>
                                        <td data-id="HRA_RT" class="asc">0.268</td>
                                        <td data-id="BB_CN">11</td>
                                        <td data-id="IB_CN">1</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">22</td>
                                        <td data-id="GD_CN">0</td>
                                        <td data-id="SLG_RT">0.463</td>
                                        <td data-id="OBP_RT">0.362</td>
                                        <td data-id="OPS_RT">0.825</td>
                                        <td data-id="MH_HITTER_CN">7</td>
                                        <td data-id="SP_HRA_RT">0.192</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>43</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=74339">유한준</a></td>
                                        <td>kt</td>
                                        <td data-id="HRA_RT" class="asc">0.267</td>
                                        <td data-id="BB_CN">4</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">9</td>
                                        <td data-id="GD_CN">3</td>
                                        <td data-id="SLG_RT">0.293</td>
                                        <td data-id="OBP_RT">0.304</td>
                                        <td data-id="OPS_RT">0.597</td>
                                        <td data-id="MH_HITTER_CN">3</td>
                                        <td data-id="SP_HRA_RT">0.500</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>44</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=74206">김재호</a></td>
                                        <td>두산</td>
                                        <td data-id="HRA_RT" class="asc">0.259</td>
                                        <td data-id="BB_CN">8</td>
                                        <td data-id="IB_CN">1</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">11</td>
                                        <td data-id="GD_CN">0</td>
                                        <td data-id="SLG_RT">0.328</td>
                                        <td data-id="OBP_RT">0.348</td>
                                        <td data-id="OPS_RT">0.676</td>
                                        <td data-id="MH_HITTER_CN">1</td>
                                        <td data-id="SP_HRA_RT">0.286</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>45</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=75566">이원석</a></td>
                                        <td>삼성</td>
                                        <td data-id="HRA_RT" class="asc">0.257</td>
                                        <td data-id="BB_CN">7</td>
                                        <td data-id="IB_CN">1</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">13</td>
                                        <td data-id="GD_CN">1</td>
                                        <td data-id="SLG_RT">0.357</td>
                                        <td data-id="OBP_RT">0.333</td>
                                        <td data-id="OPS_RT">0.690</td>
                                        <td data-id="MH_HITTER_CN">5</td>
                                        <td data-id="SP_HRA_RT">0.267</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>46</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=67598">번즈</a></td>
                                        <td>롯데</td>
                                        <td data-id="HRA_RT" class="asc">0.256</td>
                                        <td data-id="BB_CN">6</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">2</td>
                                        <td data-id="KK_CN">19</td>
                                        <td data-id="GD_CN">4</td>
                                        <td data-id="SLG_RT">0.451</td>
                                        <td data-id="OBP_RT">0.319</td>
                                        <td data-id="OPS_RT">0.770</td>
                                        <td data-id="MH_HITTER_CN">7</td>
                                        <td data-id="SP_HRA_RT">0.136</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>47</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=74729">최진행</a></td>
                                        <td>한화</td>
                                        <td data-id="HRA_RT" class="asc">0.254</td>
                                        <td data-id="BB_CN">6</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">2</td>
                                        <td data-id="KK_CN">17</td>
                                        <td data-id="GD_CN">0</td>
                                        <td data-id="SLG_RT">0.356</td>
                                        <td data-id="OBP_RT">0.343</td>
                                        <td data-id="OPS_RT">0.699</td>
                                        <td data-id="MH_HITTER_CN">5</td>
                                        <td data-id="SP_HRA_RT">0.071</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>48</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=62415">박해민</a></td>
                                        <td>삼성</td>
                                        <td data-id="HRA_RT" class="asc">0.247</td>
                                        <td data-id="BB_CN">5</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">14</td>
                                        <td data-id="GD_CN">2</td>
                                        <td data-id="SLG_RT">0.258</td>
                                        <td data-id="OBP_RT">0.284</td>
                                        <td data-id="OPS_RT">0.542</td>
                                        <td data-id="MH_HITTER_CN">6</td>
                                        <td data-id="SP_HRA_RT">0.231</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>49</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=95436">이승엽</a></td>
                                        <td>삼성</td>
                                        <td data-id="HRA_RT" class="asc">0.247</td>
                                        <td data-id="BB_CN">6</td>
                                        <td data-id="IB_CN">1</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">14</td>
                                        <td data-id="GD_CN">3</td>
                                        <td data-id="SLG_RT">0.420</td>
                                        <td data-id="OBP_RT">0.303</td>
                                        <td data-id="OPS_RT">0.723</td>
                                        <td data-id="MH_HITTER_CN">5</td>
                                        <td data-id="SP_HRA_RT">0.174</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>50</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=79240">허경민</a></td>
                                        <td>두산</td>
                                        <td data-id="HRA_RT" class="asc">0.246</td>
                                        <td data-id="BB_CN">11</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">2</td>
                                        <td data-id="KK_CN">7</td>
                                        <td data-id="GD_CN">1</td>
                                        <td data-id="SLG_RT">0.292</td>
                                        <td data-id="OBP_RT">0.372</td>
                                        <td data-id="OPS_RT">0.664</td>
                                        <td data-id="MH_HITTER_CN">3</td>
                                        <td data-id="SP_HRA_RT">0.364</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>51</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=75151">정의윤</a></td>
                                        <td>SK</td>
                                        <td data-id="HRA_RT" class="asc">0.242</td>
                                        <td data-id="BB_CN">5</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">4</td>
                                        <td data-id="KK_CN">10</td>
                                        <td data-id="GD_CN">3</td>
                                        <td data-id="SLG_RT">0.394</td>
                                        <td data-id="OBP_RT">0.325</td>
                                        <td data-id="OPS_RT">0.719</td>
                                        <td data-id="MH_HITTER_CN">3</td>
                                        <td data-id="SP_HRA_RT">0.333</td>
                                        <td data-id="PH_HRA_RT">0.333</td>
                                    </tr>

                                    <tr>
                                        <td>52</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=73153">이대형</a></td>
                                        <td>kt</td>
                                        <td data-id="HRA_RT" class="asc">0.239</td>
                                        <td data-id="BB_CN">3</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">9</td>
                                        <td data-id="GD_CN">1</td>
                                        <td data-id="SLG_RT">0.296</td>
                                        <td data-id="OBP_RT">0.270</td>
                                        <td data-id="OPS_RT">0.566</td>
                                        <td data-id="MH_HITTER_CN">3</td>
                                        <td data-id="SP_HRA_RT">0.267</td>
                                        <td data-id="PH_HRA_RT">1.000</td>
                                    </tr>

                                    <tr>
                                        <td>53</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=79192">채은성</a></td>
                                        <td>LG</td>
                                        <td data-id="HRA_RT" class="asc">0.227</td>
                                        <td data-id="BB_CN">2</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">3</td>
                                        <td data-id="KK_CN">16</td>
                                        <td data-id="GD_CN">1</td>
                                        <td data-id="SLG_RT">0.258</td>
                                        <td data-id="OBP_RT">0.282</td>
                                        <td data-id="OPS_RT">0.540</td>
                                        <td data-id="MH_HITTER_CN">5</td>
                                        <td data-id="SP_HRA_RT">0.222</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>54</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=76812">이재원</a></td>
                                        <td>SK</td>
                                        <td data-id="HRA_RT" class="asc">0.222</td>
                                        <td data-id="BB_CN">1</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">13</td>
                                        <td data-id="GD_CN">2</td>
                                        <td data-id="SLG_RT">0.222</td>
                                        <td data-id="OBP_RT">0.231</td>
                                        <td data-id="OPS_RT">0.453</td>
                                        <td data-id="MH_HITTER_CN">3</td>
                                        <td data-id="SP_HRA_RT">0.083</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>55</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=70553">박기혁</a></td>
                                        <td>kt</td>
                                        <td data-id="HRA_RT" class="asc">0.219</td>
                                        <td data-id="BB_CN">2</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">14</td>
                                        <td data-id="GD_CN">1</td>
                                        <td data-id="SLG_RT">0.297</td>
                                        <td data-id="OBP_RT">0.239</td>
                                        <td data-id="OPS_RT">0.536</td>
                                        <td data-id="MH_HITTER_CN">3</td>
                                        <td data-id="SP_HRA_RT">0.118</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>56</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=75334">오재일</a></td>
                                        <td>두산</td>
                                        <td data-id="HRA_RT" class="asc">0.214</td>
                                        <td data-id="BB_CN">8</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">12</td>
                                        <td data-id="GD_CN">0</td>
                                        <td data-id="SLG_RT">0.300</td>
                                        <td data-id="OBP_RT">0.300</td>
                                        <td data-id="OPS_RT">0.600</td>
                                        <td data-id="MH_HITTER_CN">3</td>
                                        <td data-id="SP_HRA_RT">0.333</td>
                                        <td data-id="PH_HRA_RT">1.000</td>
                                    </tr>

                                    <tr>
                                        <td>57</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=70410">김주찬</a></td>
                                        <td>KIA</td>
                                        <td data-id="HRA_RT" class="asc">0.188</td>
                                        <td data-id="BB_CN">2</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">6</td>
                                        <td data-id="GD_CN">4</td>
                                        <td data-id="SLG_RT">0.304</td>
                                        <td data-id="OBP_RT">0.211</td>
                                        <td data-id="OPS_RT">0.515</td>
                                        <td data-id="MH_HITTER_CN">1</td>
                                        <td data-id="SP_HRA_RT">0.100</td>
                                        <td data-id="PH_HRA_RT">0.333</td>
                                    </tr>

                                    <tr>
                                        <td>58</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=67024">모넬</a></td>
                                        <td>kt</td>
                                        <td data-id="HRA_RT" class="asc">0.182</td>
                                        <td data-id="BB_CN">12</td>
                                        <td data-id="IB_CN">1</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">17</td>
                                        <td data-id="GD_CN">0</td>
                                        <td data-id="SLG_RT">0.327</td>
                                        <td data-id="OBP_RT">0.329</td>
                                        <td data-id="OPS_RT">0.656</td>
                                        <td data-id="MH_HITTER_CN">0</td>
                                        <td data-id="SP_HRA_RT">0.143</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>59</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=77248">오재원</a></td>
                                        <td>두산</td>
                                        <td data-id="HRA_RT" class="asc">0.175</td>
                                        <td data-id="BB_CN">10</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">11</td>
                                        <td data-id="GD_CN">3</td>
                                        <td data-id="SLG_RT">0.175</td>
                                        <td data-id="OBP_RT">0.297</td>
                                        <td data-id="OPS_RT">0.472</td>
                                        <td data-id="MH_HITTER_CN">2</td>
                                        <td data-id="SP_HRA_RT">0.176</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    <tr>
                                        <td>60</td>
                                        <td><a href="/Record/Player/HitterDetail/Basic.aspx?playerId=74605">김주형</a></td>
                                        <td>KIA</td>
                                        <td data-id="HRA_RT" class="asc">0.155</td>
                                        <td data-id="BB_CN">7</td>
                                        <td data-id="IB_CN">0</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">7</td>
                                        <td data-id="GD_CN">2</td>
                                        <td data-id="SLG_RT">0.207</td>
                                        <td data-id="OBP_RT">0.258</td>
                                        <td data-id="OPS_RT">0.465</td>
                                        <td data-id="MH_HITTER_CN">1</td>
                                        <td data-id="SP_HRA_RT">0.222</td>
                                        <td data-id="PH_HRA_RT">0.000</td>
                                    </tr>

                                    </tbody>
                                </table>

                                <div class="paging">
                                    <a id="cphContents_cphContents_cphContents_ucPager_btnFirst" title="첫 페이지로 이동" href="javascript:__doPostBack('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ucPager$btnFirst','')"><img src="/resources/images/common/btn_paging_first.gif" alt="처음으로"></a>

                                    <a id="cphContents_cphContents_cphContents_ucPager_btnNo1" href="javascript:__doPostBack('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ucPager$btnNo1','')">1</a>
                                    <a id="cphContents_cphContents_cphContents_ucPager_btnNo2" class="on" href="javascript:__doPostBack('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ucPager$btnNo2','')">2</a>
                                    <a id="cphContents_cphContents_cphContents_ucPager_btnNo3" href="javascript:__doPostBack('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ucPager$btnNo3','')">3</a>








                                    <a id="cphContents_cphContents_cphContents_ucPager_btnLast" title="마지막 페이지로 이동" href="javascript:__doPostBack('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ucPager$btnLast','')"><img src="/resources/images/common/btn_paging_last.gif" alt="맨끝으로"></a>
                                </div>
                                <input type="hidden" name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$hfPage" id="cphContents_cphContents_cphContents_hfPage" value="2">
                                <input type="hidden" name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$hfOrderByCol" id="cphContents_cphContents_cphContents_hfOrderByCol" value="HRA_RT">
                                <input type="hidden" name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$hfOrderBy" id="cphContents_cphContents_cphContents_hfOrderBy" value="DESC">
                                <a id="cphContents_cphContents_cphContents_lbtnOrderBy" href="javascript:__doPostBack('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$lbtnOrderBy','')" style="display:none"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <!-- // container -->
        <hr>
        <!-- footer -->
        <footer>
            <div id="fnb">
                <div class="wrapping fnb-wrap">
                    <ul class="fnb-list">
                        <li class="privacy"><a href="/Etc/Privacy.aspx">개인정보보호정책</a></li>
                        <li><a href="/Schedule/ScoreBoard.aspx">문자중계</a></li>
                        <li><a href="/Board/Faq/List.aspx">고객질문</a></li>
                        <li><a href="/Etc/SiteMap.aspx">사이트맵</a></li>

                    </ul>
                    <div class="btn-kbo"><a href="/About/Etc/TeamInfo.aspx">KBO 리그 구단소개</a></div>
                </div>
            </div>
            <div id="kboInfo" class="wrapping">
                <h2><a href="/Etc/PressRelease.aspx"><img src="//image.koreabaseball.com/resources/images/common/h2_logo.png" alt="KBO"></a></h2>
                <address class="kbo-info">
                    <div class="address01">
                        <p>(사)한국야구위원회</p>
                        <p>02) 3460-4600</p>
                        <p>서울시 강남구 강남대로 278</p>
                    </div>

                </address>
                <div class="copyright">
                    <span>본 사이트는 스포츠투아이㈜가 KBO 리그 팬을 위해 운영하는 KBO 공식 사이트입니다. </span><br>
                    <span>Copyrightⓒ KBO, All Rights Reserved.</span>
                </div>
                <div class="certification">
                    <img src="//image.koreabaseball.com/resources/images/main/img_certification.png" alt="w3c xhtml 3.0, Verisign">
                </div>
            </div>
        </footer>
        <!-- // footer -->
    </div>
    <!-- // wrap -->


    <script type="text/javascript">
        //<![CDATA[
        jQuery(function ($) {$('[data-id=HRA_RT]').addClass('asc');$('[data-id=HRA_RT]').siblings().removeClass('asc');});//]]>
    </script>
    <span style="display: none !important;"><input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value=""></span><span style="display: none !important;"><input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value=""></span><span style="display: none !important;"><input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value=""></span><span style="display: none !important;"><input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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"></span><span style="display: none !important;"><input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="548A76F2"></span><span style="display: none !important;"><input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAFXzPoSB1KP2I/UjEqd75zz4Mzj2o/Kl3exwtkWJg3O5wUXPArnrpnBEHgYewENEHAHN0KWRtFnUB520854STIKEF5H2d3ilWP1wNV0aXdjy0vtzQsR+QRc0xVJHti5+cOFyE1/cwJtk7pXwOpF/aAt2Z9zuKHrloXfA/yQr8D2Ucrrt9yxA54GObgPZf99RTyjTKnVrlhwsRCE+lowuR7r0bf2pla371+2DOYtPosfhtmyozayEWKkG2Z+gM3Qk1x4/Y5L9N0WTBZCeC5SLVRvBUnDfXDZ6VjcflzHQHbrIShj/U/uqvJYmwAXVt8pp8y7DNtdq70Ie9QlBLUvZdOLYXtWczA60sUIuI3W7v7mxOkbTa2oa77ETfy7ZEV08USxZA91lnQOJsTJ+xNBTbPtjON+ipKcUHaNaBlWXPkOacsmf4QkjtnqhqNi9c4HCG4rg1o0ToOFLs7Hm3BlM4RUSFTV56aEQCnu0p0WZNFmJK++U1++ulUMRSBtH0tKELRcz/45AdAtlOLzaqSrdORpPagFmZb7WMq0ob0u5jY9vRw+oX9baQPl2b3ydxTtWcku6QQYX82nKf7eh+ZLKhA0A1FGC+DJZsSmb0JTnezgKfibuCmdrfh/c4c1cSncDtBZ4Dm6yPaag+gdonM6+L18lZmbefxecbg3k640ix0tpJkliQCd7D8Upo2sF3CAj6M0trgHX1rtHRDG0wPytwjIpe9CWUD+HEZjDxFyN9UyrJ/OyXRqTZrmK4PtxOFathuW24yqZeC8B8R43azSgcKguOXeAeMuYLmxIgdUODE8fjEcZ7MXNsXHNVSvJCzNuzVJt+1RaSWeP5wW4+ssNHBvd5if0UrG/fr3rb85q2NXNReuTVCNu0QpgyBDsMbWwHnZ+3E8QgnA5L9ln82SQITXxOvwJOtLSS9ehfAKfe8hKlBZOnecS+MQB3blP4nXht/jrC6YM4udi1VxfozHCyTG2p/74UTTGRLYPSqtfwlbAQ6rBbPyHj3lKTX76zzcBHnWZnrwnlHnDl9Liy1p9AttOsnd0UuM78/oxSrkg4Wk3RITArCNvA91Ndck79b+bDdsWhcOykAkRJXzW0B70EUeiOvd3eJu3lxP+d7EDS7ti9Cstp9k4GTS1vtpEN6Wq+CjK9A9r2vSCab6p1U4/OO6VkuhkApDnJz2QYJ4+WtiVI/BX9FcIhpzUjf6aWSg0KxZfk8/g5053ihgiVWBrAfi8lMQ44crGiAzvrGqenAxeWOZ8mDbKjELLdoHfvhada9FXshlYN2OBm4eu9GhEnuohtO7Selh5luflgqmuhx1jRAr3f40TJwdnibW1HJ+VpbKQnMjEL2maqPJYSOzZ+awCk/C+9Bo5RYk3j9loXvgxHzggB5hizSMu2vARnuB2v9PzCjXCiNjt3/7z1LXzIV2tqBLDAEESxy199SEtD49LhO1uXUNw2svPsmPDLK80ktPS9eKyMBWzXdlUJURVwhCrjLgwrrzhFDN/gZlIoSkamWPWcBPidp4WrrRdbyFGfNoU+U3yzebfJhKnUJ9F7DRE0zxlvdzRXF4fyrC5lL8X+BdRUymSV4A0UxeZjX1OVFEiOWPhirYYeRF9j6aRRYlnLrud7FiNq0L8BkCezMoQiiIEsp38v5tQJGTakYgKU9G0SJOG5m8osNqJPC8AHwhgHI2br7Hq3kyBQ5g9u5iBunSWQ+nSaaS/IuQ9n0EaFQGpQrr6ZGx3GGc0ID5YbbXatju847sJ74sRWByRu20/zzQMCjIM6WdafmGVauZlAElODwXRkgyu1MWmHEHNt0g573Uomn0gAzW/1LdO5foqb8BQjDFVFEdsAFZRgIWQn5c="></span></form>






<script type="text/javascript">
    currentLnb("02");

    function tooltip(x) {
        var title = $(x).attr("title");
        $(x).append("<div class='tooltip'></div>");
        $(".tooltip").html(title);
        var cnt = $(".tooltip").text().length;
        $(".tooltip").css("width", cnt * 12);
        return false;
    }

    function hideTip() {
        $(".tooltip").remove();
    }

    $(".record_words a").on("click", function (e) {
        e.preventDefault();
        Words();
        $(".words").show();
    });

    function sort(colName) {
        var order = $("#cphContents_cphContents_cphContents_hfOrderBy").val();           //정렬조건

        if($("#cphContents_cphContents_cphContents_hfOrderByCol").val() == colName) {
            if (order.indexOf("DESC") > -1) {
                order = "ASC";
            } else {
                order = "DESC";
            }
        } else {
            if(colName == "ERA_RT") {
                order = "ASC";
            } else {
                order = "DESC";
            }
        }

        $("#cphContents_cphContents_cphContents_hfOrderByCol").val(colName);
        $("#cphContents_cphContents_cphContents_hfOrderBy").val(order);
        __doPostBack('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$lbtnOrderBy','')
    }
</script>



<script type="text/javascript">
    $(document).ready(function () {
        // 선수 검색
        $(document).on("click", "#btnTopPlayerSearch", function (e) {
            getPlayerSearch();
            e.preventDefault();
        });

        // 선수 검색 엔터
        $(document).on("keypress", "#txtTopPlayerWord", function (e) {
            if (event.keyCode == 13) {
                getPlayerSearch();
                e.preventDefault();
            }
        });

        //// 선수 검색 마우스 아웃
        //$("body").click(function (e) {
        //    var container = $("#player_search_area");

        //    if (container.css("display") == "block") {
        //        if (!container.has(e.target).length) {
        //            container.hide();
        //        }
        //    }
        //});
    });

    // 선수 검색
    function getPlayerSearch() {
        if ($("#txtTopPlayerWord").val() == "") {
            alert("선수명은 필수 입니다.");
            $("#txtTopPlayerWord").focus();
            return false;
        } else {
            //var searchWord = encodeURI($("#txtTopPlayerWord").val());

            //if (searchWord != "") {
            //    location.href = "/Player/Search.aspx?searchWord=" + searchWord;
            //}
            var request = $.ajax({
                type: "post"
                , url: "/ws/Controls.asmx/GetSearchPlayer"
                , dataType: "json"
                , data: {
                    name: $("#txtTopPlayerWord").val()
                }
                , error: ajaxFailed
                , async: true
            });

            request.done(function (data) {
                if (data.code == "100") {
                    var container = $(".search-result");
                    container.children().remove();

                    if (data.now.length > 0 || data.retire.length > 0) {
                        if (data.now.length > 0) {
                            container.append($("<h4>등록 선수</h4>"));

                            var div = $("<div class='active' />");
                            div.children().remove();

                            setPlayerDiv(data.now, div, true);

                            container.append(div);
                        }

                        if (data.retire.length > 0) {
                            container.append($("<h4>역대 선수</h4>"));

                            var div = $("<div class='retire'/>");
                            div.children().remove();

                            setPlayerDiv(data.retire, div, false);

                            container.append(div);
                        }

                        //container.append($(String.format("<p><a href='/Player/Search.aspx?searchWord={0}''>'{0}' 검색결과 모두 보기</a></p>", $("#txtTopPlayerWord").val())));
                        container.append($("<p><a href='/Player/Search.aspx?searchWord=" + $("#txtTopPlayerWord").val() + "''>'" + $("#txtTopPlayerWord").val() + "' 검색결과 모두 보기</a></p>"));
                    } else {
                        container.append($("<p class='null'>검색 결과가 없습니다.</p>"));
                    }

                    container.show();
                }
            });
        }
    }

    // 선수 검색 div
    function setPlayerDiv(list, div, isActive) {
        $.each(list, function (index, player) {
            var aLink = $("<a />");
            aLink.attr("href", player["P_LINK"]);

            var dl = $("<dl />");
            var dt = $("<dt />");
            var backNo = "";

            if (isActive) {
                //backNo = String.format("No.{0}", player["BACK_NO"]);
                backNo = "No." + player["BACK_NO"];
            }

            //dt.text(String.format("{0} {1}", player["P_NM"], backNo));
            dt.text(player["P_NM"] + " " + backNo);
            dl.append(dt);

            var dd = $("<dd />");
            //dd.text(String.format("{0} {1}({2})", player["T_NM"], player["POS_NO"], player["P_TYPE"]));
            dd.text(player["T_NM"] + " " + player["POS_NO"] + "(" + player["P_TYPE"] + ")");
            dl.append(dd);

            var ddImg = $("<dd class='btn-arrow'><img src='//image.koreabaseball.com/resources/images/common/btn_arrow_search.png' alt='' /></dd>");
            dl.append(ddImg);

            aLink.append(dl);
            div.append(aLink);
        });
    }
</script>
</body>