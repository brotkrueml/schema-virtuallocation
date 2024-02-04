.PHONY: qa
qa: cs

.PHONY: cs
cs: vendor
	.Build/bin/ecs --fix

vendor: composer.json composer.lock
	composer validate
	composer install
	composer normalize

.PHONY: zip
zip:
	grep -Po "(?<='version' => ')([0-9]+\.[0-9]+\.[0-9]+)" ext_emconf.php | xargs -I {version} sh -c 'mkdir -p ../zip; git archive -v -o "../zip/$(shell basename $(CURDIR))_{version}.zip" v{version}'
