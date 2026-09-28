"""Remove do HTML gerado os <symbol> não referenciados por <use href="#id">."""
import re, sys, glob
for f in glob.glob('*.html'):
    s = open(f, encoding='utf-8').read()
    used = set(re.findall(r'href="#([A-Za-z0-9_-]+)"', s)) | set(re.findall(r'url\(#([A-Za-z0-9_-]+)\)', s))
    def keep(m):
        sid = re.search(r'id="([^"]+)"', m.group(0))
        return m.group(0) if (sid and sid.group(1) in used) else ''
    s2 = re.sub(r'<symbol\b.*?</symbol>', keep, s, flags=re.S)
    open(f, 'w', encoding='utf-8').write(s2)
    print(f, len(s), '->', len(s2))
