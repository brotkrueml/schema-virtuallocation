.PHONY: qa
qa: cs

.PHONY: cs
cs: vendor
	.Build/bin/ecs --fix

vendor: composer.json composer.lock
	composer validate
	composer install
	composer normalize
