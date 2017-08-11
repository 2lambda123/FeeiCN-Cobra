#!/usr/bin/env python
# -*- coding: utf-8 -*-

"""
    cobra
    ~~~~~

    Implements cobra main

    :author:    BlBana <635373043@qq.com>
    :homepage:  https://github.com/wufeifei/cobra
    :license:   MIT, see LICENSE for more details.
    :copyright: Copyright (c) 2017 Feei. All rights reserved
"""
import json
import requests


def start():
    page = 1
    while True:
        git_urls = []
        params = {'private_token': 'aQueyqZmKYLPx3wmgDNH', 'page': page}
        url = 'http://gitlab.mogujie.org/api/v3/projects/all'
        r = requests.get(url, params=params)

        if r.status_code == 200:
            data = r.json()  # 一个页面中的Json数据，默认20条
            if len(data) == 0:
                print("url收集完毕")
                break
            for j in range(len(data)):
                git_url = data[j]['http_url_to_repo']
                git_branch = data[j]['default_branch']

                if git_branch is not None:
                    request_url = git_url+':'+git_branch
                else:
                    request_url = git_url
                git_urls.append(request_url)
            # res = push_to_api(git_urls)
            # if res:
            #     print ("page %d git push success" % page)
            # else:
            #     print ("page %d git push fail" % page)

        elif r.status_code == 404:
            print("404")

        else:
            print(r.status_code)

        page += 1


def push_to_api(urls):
    headers = {"Content-Type": "application/json"}
    url = "http://10.11.2.51:9999/api/add"
    payload = {"key": "your_secret_key", "target": urls}
    r = requests.post(url=url, data=json.dumps(payload), headers=headers)
    if r.status_code == 200:
        print(r.json())
        return True
    else:
        print(r.json())
        return False


def get_pages():
    pass


start()
