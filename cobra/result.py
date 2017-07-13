class VulnerabilityResult:
    def __init__(self):
        self.id = 0
        self.vid = 10010
        self.vulnerability = 'XSS'
        self.rule_name = 'Reflect XSS'
        self.file_path = None
        self.line_number = None
        self.code_content = None
        self.match_result = None
        self.author = 'Unknown'
        self.timestamp = None
        self.id = None
        self.mode = None
        self.type = None

    def convert_to_dict(self):
        _dict = {}
        _dict.update(self.__dict__)
        return _dict
