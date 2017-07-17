# -*- coding: utf-8 -*-

"""
    result
    ~~~~~~

    Implements result structure

    :author:    Feei <feei@feei.cn>
    :homepage:  https://github.com/wufeifei/cobra
    :license:   MIT, see LICENSE for more details.
    :copyright: Copyright (c) 2017 Feei. All rights reserved
"""


class VulnerabilityResult:
    def __init__(self):
        self.vulnerability = ''
        self.rule_name = ''
        self.file_path = None
        self.line_number = None
        self.code_content = None
        self.match_result = None
        self.commit_time = None
        self.commit_author = 'Unknown'
