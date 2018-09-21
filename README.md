laravel package 만들기 테스트
=======================

패키지 만들때 참고한 페이지 Link
--------------------
[packages-test](https://github.com/lomi525/packages-test)

[PHP 패키지 만들고 composer 로 배포하기](https://www.lesstif.com/pages/viewpage.action?pageId=36209479)


설치방법 - public
-------------
1. https://packagist.org/ 에 패키지를 추가한다.

2. composer.json 파일에 다음과 같이 추가

        "bjm/package_test": "*"

3. 다음 composer 명령어로 설치

        # composer install

또는

2. 다음 composer 명령어로 설치

        # composer require bjm/package_test


설치방법 - private
--------------
1. 설치를 원하는 프로젝트(이하 내프로젝트)의 디렉토리가 있는 경로에 해당 패키지를 clone 받는다.

        # git clone https://github.com/wood08/package_test.git

2. 내프로젝트의 composer.json 에 다음 내용 추가

        "repositories": [{
            "type": "vcs",
            "url": "../package_test"
        }],
        "require": {
            "bjm/package_test": "*"
        },

3. composer 명령어 실행으로 설치

        # composer install

수정사항 반영 방법 (버전올리기)
------------------
수정 후

        # git commit
        # git push
        # git tag -a [버전] -m [코멘트]
            ex) git tag -a 1.0.1 -m '버전 업 관련 설명 추가'
 * git tag -l -n 으로 tag 확인 가능
