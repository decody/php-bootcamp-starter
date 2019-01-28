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
* -: 14강 - 언어구조

## 기초이론

* -: 15강 - HTTP

## 웹사이트 구축

* HtmlTemplate: 16강 - HTML 템플릿
* Form: 17강 - 폼
* CookieAndSession: 18강 - 쿠키와 세션

## 내장함수

* File: 19강 - 파일 시스템
* Http: 20강 - cURL

## 한층 더 레벨업!

* Security: 21강 - 웹 보안
* Cache: 22강 - 캐싱
* -: 23강 - 디버깅
* PHP.ini: 24강 - php.ini

## 로그인과 게시판

### 로그인

* App/public/auth/register*.php: 25강 - 회원가입
* App/public/auth/log*.php: 26강 - 로그인과 로그아웃

### 게시판

* App/public/board/write*.php: 27강 - 게시판 쓰기
* App/public/board/read.php: 28강 - 게시판 읽기
* App/public/index.php: 29강 - 게시판 목록

### 다듬질

* App/providers/*.php: 30강 - 다듬질

# 개발 및 테스트

* 로그인과 게시판 개발서버를 시작할 때 별도로 ```php -S localhost:80``` 를 사용하여 시작할 필요가 없습니다. ```npm run serve``` 를 사용하면 자동으로 변화를 감지하여 브라우저를 새로고침 해주는 **라이브 서버**를 시작할 수 있습니다.
* **라이브 서버**는 ```localhost:8000``` 에서 php 서버를 시작하고 ```localhost:3000``` 에서 동작합니다. 브라우저가 자동으로 열리지 않는다면 라이브 서버를 켜고 ```localhost:3000``` 로 접속해보세요.
* ```node``` 와 ```npm``` 이 설치되어 있어야 합니다.

```bash
# 프로젝트 복사
git clone https://github.com/pronist/php-bootcamp-starter

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