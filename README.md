# PHP Bootcamp

**PHP 부트캠프 입문** 강의예제 소스코드입니다.

## PHP 기본문법

* HelloWorld: 1강 - Hello, World!
* StringAndNumber: 2강 - 문자열과 숫자
* Variables: 3강 - 변수
* If: 4강 - if ~ else if ~ else
* SwitchCase: 5강 - switch ~ case
* ForAndWhile: 6강 - for, while, do ~ while
* Array: 7강 - 배열
* Type: 8강 - 자료형
* Function: 9강 - 함수
* Scope: 10강 - 변수 스코프와 정적변수
* Const: 11강 - 매직상수, 상수
* References: 12강 - 참조
* Include: 13강 - include, require

## 기초이론

* -: 14강 - HTTP

## 웹사이트 구축

* HtmlTemplate: 15강 - HTML 템플릿
* Form: 16강 - 폼
* CookieAndSession: 17강 - 쿠키와 세션

## 내장함수

* File: 18강 - 파일 시스템
* Http: 19강 - cURL

## 디버깅

* -: 20강 - 디버깅

## 로그인 및 게시판

* -: 21강 - 프로젝트 개요
* LoginAndBoard/app/auth/register*.php: 22강 - 회원가입
* LoginAndBoard/app/auth/log*.php: 23강 - 로그인과 로그아웃
* LoginAndBoard/app/board/write*.php: 24강 - 게시판 쓰기
* LoginAndBoard/app/board/read.php: 25강 - 게시판 읽기
* LoginAndBoard/app/index.php: 26강 - 게시판 목록

## 보안

* -: 27강 - 보안취약점

## 성능

* Cache: 28강 - 캐싱

## 부록

* Constructs: 29강 - 언어구조
* PHP.ini: 30강 - php.ini

# 개발 및 테스트

* 개발서버를 시작할 때 별도로 ```php -S localhost:80``` 를 사용하여 시작할 필요가 없습니다. ```npm run serve``` 를 사용하면 자동으로 변화를 감지하여 브라우저를 새로고침 해주는 **라이브 서버**를 시작할 수 있습니다.
* **라이브 서버**는 ```localhost:8000``` 에서 php 서버를 시작하고 ```localhost:3000``` 에서 동작합니다. 브라우저가 자동으로 열리지 않는다면 라이브 서버를 켜고 ```localhost:3000``` 로 접속해보세요.
* ```node``` 와 ```npm``` 이 설치되어 있어야 합니다.

```bash
# 작업 디렉토리로 이동해주세요.
cd <PROJECT_DIRECTORY>

# 노드 모듈을 설치합니다.
npm install

# npm run watch
# npm run serve
```

# 명령

|Name|description|
|----|-----------|
|npm run watch|**CLI** 환경에서 php 파일의 변화를 감지합니다.|
|npm run serve|**로그인 및 게시판** 프로젝트를 위해 개발서버를 가동합니다.|

# 질문 및 문의사항

https://github.com/pronist/php-bootcamp-stater/issues