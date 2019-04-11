# family = [
#  "clef",
#  "cle",
#  "quarter",
#  "quaver"
#  ]
 

# もっとスッキリ書きたい

# yaml を使う
require 'yaml' 

# yaml を読み込む
# family = YAML.load_file('name.yml')


 File.open('name.yml') do |family|
  YAML.load_documents(family) do |member|
      p member
  end
 end
 